<?php

namespace App\Controllers;

use App\Entities\SelectOption;
use App\Models\TaskModel;
use App\Models\UserModel;

class Task extends BaseController
{
    public function tasks()
    {
        $taskModel = new TaskModel;

        $auth = service('auth');

        $user = $auth->getCurrentUser();

        $tasks = null;

        switch ($user->role)
        {
            case 'admin':
                $tasks = $taskModel->getAllTasksPaginated();
                break;
            case 'volunteer':
                $tasks = $taskModel->getUserTasksPaginated($user->id);
                break;
        }

        echo view('Task/tasks',[
            'tasks' => $tasks,
            'userRole' => $user->role
        ]);
    }

    public function addtask()
    {
        $model = new UserModel;

        $options = $model->getVolunteersAsOptions();

        echo view('Task/addtask', [
            'options' => $options
        ]);
    }

    public function newtask()
    {
        $title = $this->request->getPost('title');
        $user_id = $this->request->getPost('volunteer');

        $task = new \App\Entities\Task;

        $task->title = $title;
        $task->user_id = $user_id;

        $model = new TaskModel;

        if($model->insert($task))
        {
            return redirect()->to('/tasks');
        }

        dd('error submitted', $title, $user_id);

    }

    public function completetask($taskId)
    {
        $taskModel = new TaskModel;
        $auth = service('auth');

        $user = $auth->getCurrentUser();

        $task = $taskModel
            ->where('id', $taskId)
            ->first();

        if($user==null || $task->user_id != $user->id)
        {
            dd('You are not authorised');
        }

        $task->is_completed = true;
        $task->completed_at = date('Y-m-d H:i:s');

        //dd($task);

        if($taskModel->save($task))
        {
            return redirect()->to('/tasks');
        }
        else{
            dd('Task Update Failed');
        }

        dd($task);
    }

    public function deletetask($taskId)
    {
        $taskModel = new TaskModel;
        $auth = service('auth');

        $user = $auth->getCurrentUser();

        if($user==null || $user->role!='admin')
        {
            dd('You are not authorised');
        }

        $taskModel->deletetask($taskId);

        return redirect()->to('/tasks');

        dd($task);
    }

    public function edittask($taskId)
    {
        $taskModel = new TaskModel;

        $task = $taskModel->find($taskId);
        $options = (new UserModel())->getVolunteersAsOptions();

        //dd($task, $options);

        echo view('Task/edittask', [
            'task' => $task,
            'options'=> $options
        ]);
    }

    public function pedittask($taskId)
    {
        $taskModel = new TaskModel;
        $task = $taskModel->find($taskId);


        $task->title = $this->request->getPost('title');
        $task->user_id = $this->request->getPost('volunteer');

        $taskModel->save($task);

        return redirect()->to('/tasks');


    }

}
