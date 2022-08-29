<?php

namespace App\Controllers;

use App\Entities\SelectOption;
use App\Entities\User;
use App\Models\TaskModel;
use App\Models\UserModel;

class Admin extends BaseController
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel;
    }

    public function dashboard()
    {
        $auth = service('auth');

        $user = $auth->getCurrentUser();

        $taskModel = new TaskModel;

        $allTasks = $taskModel->countAllResults();
        $completedTasks = $taskModel->where('is_completed', true)->countAllResults();
        $volunteersCount = $this->userModel->where('role_id', 2)->countAllResults();

        $dashboardStats['allTasks'] = $allTasks;
        $dashboardStats['completed'] = $completedTasks;
        $dashboardStats['pending'] = $allTasks-$completedTasks;
        $dashboardStats['allvolunteers'] = $volunteersCount;


        echo view('Admin/dashboard', [
            'user' => $user,
            'stats' => $dashboardStats
        ]);
    }

    public function addvolunteer()
    {
        echo view('Admin/addvolunteer');
    }

    public function volunteers()
    {
        $model = new UserModel;
        $volunteers = $model->getAllVolunteersPaginated();

        return view('Admin/volunteers', [
            'volunteers' => $volunteers
        ]);
    }

    public function getAllVolunteers()
    {
        $model = new UserModel;

        $options = $model->getVolunteersAsOptions();


        return(json_encode($options));

    }

    public function paddvolunteer()
    {
        $email = $this->request->getPost('email');
        $first_name = $this->request->getPost('firstName');
        $last_name = $this->request->getPost('lastName');

        $user = new User;

        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->email = $email;
        $user->password = $last_name;
        $user->role_id = 2;

        if($this->userModel->insert($user))
        {
            return redirect()->to('/volunteers');

        }

        dd("Error Inserting User");
    }

    public function editvolunteer($id)
    {
        $volunteer = $this->userModel->find($id);

        echo view('Admin/editvolunteer', [
            'volunteer' => $volunteer
        ]);
    }

    public  function peditvolunteer($id)
    {
        $volunteer = $this->userModel->find($id);

        $volunteer->first_name = $this->request->getPost('firstName');
        $volunteer->last_name = $this->request->getPost('lastName');
        $volunteer->email = $this->request->getPost('email');
        $volunteer->password = $this->request->getPost('lastName');

        //dd($volunteer);

        $this->userModel->save($volunteer);

        return redirect()->to('/volunteers');
    }
}
