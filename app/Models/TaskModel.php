<?php

namespace App\Models;

use App\Entities\SelectOption;
use App\Entities\TaskDetails;

class TaskModel extends \CodeIgniter\Model
{

    protected $table = 'task';

    protected $returnType = 'App\Entities\Task';

    protected $allowedFields = ['title', 'user_id', 'is_completed', 'completed_at'];

    protected $useTimestamps = true;

    protected $validationRules = [
        'title' => 'required'
    ];

    protected $validationMessages = [
        'title' => [
            'required' => 'Enter a value for title'
        ]
    ];


    public function getAllTasksPaginated()
    {
        $tasks = $this
            ->paginate(10);

        $taskDetails = [];

        $user = new UserModel;

        foreach ($tasks as $task)
        {
            $taskDetail = new TaskDetails;

            $volunteer = $user->find($task->user_id);

            $taskDetail->id = $task->id;
            $taskDetail->title = $task->title;
            $taskDetail->status = $task->is_completed ? 'completed' : 'pending';
            $taskDetail->volunteer = $volunteer->first_name.' '.$volunteer->last_name;

            array_push($taskDetails, $taskDetail);
        }

        return $taskDetails;
    }

    public function getUserTasksPaginated($id)
    {
        $tasks = $this
            ->where('user_id',$id)
            ->paginate(10);

        $taskDetails = [];


        $user = new UserModel;

        foreach ($tasks as $task)
        {
            $taskDetail = new TaskDetails;

            $volunteer = $user->find($task->user_id);

            $taskDetail->id = $task->id;
            $taskDetail->title = $task->title;
            $taskDetail->status = $task->is_completed ? 'completed' : 'pending';
            $taskDetail->volunteer = $volunteer->first_name.' '.$volunteer->last_name;

            array_push($taskDetails, $taskDetail);
        }

        return $taskDetails;
    }


    public function deletetask($id)
    {
        //$sql = 'DELETE FROM task WHERE task.id = '.$id;

        $this
            ->where('id', $id)
            ->delete();
    }






}