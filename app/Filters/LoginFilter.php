<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;


class LoginFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //dd("filter works");

        if ( ! service('auth')->isLoggedIn()) {

            return redirect()->to('/login')
                ->with('info', 'Please login first');

        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}