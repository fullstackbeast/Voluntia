<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        if(service('auth')->isAdminLoggedIn())
        {
            return redirect()->to('/admindashboard');
        }
        if(service('auth')->isLoggedIn())
        {
            return redirect()->to('/tasks');
        }
        echo view('Auth/login');
    }

    public function logout()
    {
        $auth = service('auth');

        $auth->logout();

        return redirect()->to('/');

    }

    public function plogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $auth = service('auth');

        if ($auth->login($email, $password)) {

            $redirect_url = session('redirect_url') ?? '/';

            $user = $auth->getCurrentUser();

            switch ($user->role)
            {
                case 'admin':
                    $redirect_url = '/admindashboard';
                    break;
                case 'volunteer':
                    $redirect_url = '/tasks';
                    break;
            }
            unset($_SESSION['redirect_url']);

            return redirect()->to($redirect_url);

        } else {
            return redirect()->back()
                ->withInput()
                ->with('warning', 'invalid login');
        }
    }
}
