<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;


class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        if ( ! service('auth')->isAdminLoggedIn()) {

            return redirect()->to('/login')
                ->with('info', 'Not Authorised');

        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}