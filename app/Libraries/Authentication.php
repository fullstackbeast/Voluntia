<?php

namespace App\Libraries;

use App\Entities\UserDetails;
use App\Models\RoleModel;
use App\Models\UserModel;

class Authentication
{

    private $user;

    public function login($email, $password)
    {
        $model = new UserModel;

        $user = $model->findByEmail($email);

        if ($user === null) {
            return false;
        }

        if ( ! $user->verifyPassword($password)) {
            return false;
        }

        $this->logInUser($user);

        return true;
    }

    private function logInUser($user)
    {
        $session = session();
        $session->regenerate();
        $session->set('user_id', $user->id);
    }

    private function getUserFromSession()
    {
        if ( !session()->has('user_id')) {
            return null;
        }

        $model = new UserModel;

        $user = $model->find(session()->get('user_id'));

        if ($user) {
            return $user;
        }

        return null;
    }

    public function getCurrentUser()
    {
        if($this->user === null)
        {
            $this->user = $this->getUserFromSession();
        }

        if($this->user === null)
        {
            return null;
        }

        $user_details = new UserDetails();
        $roleModel = new RoleModel();

        $user_details->id = $this->user->id;
        $user_details->last_name = $this->user->last_name;
        $user_details->first_name = $this->user->first_name;
        $user_details->role = ($roleModel->find($this->user->role_id))->name;

        return $user_details;
    }

    public function logout()
    {
        session()->destroy();
    }

    public function isLoggedIn()
    {
        return $this->getCurrentUser() !== null;
    }

    public function isAdminLoggedIn()
    {

        $user = $this->getCurrentUser();
        if($user == null)
        {
            return false;
        }

        return $user->role == 'admin';

    }

}