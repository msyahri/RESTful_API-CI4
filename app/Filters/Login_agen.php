<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Login_agen implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('member_id')){
            return redirect()->to('agen');
            }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}