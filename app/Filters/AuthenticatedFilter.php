<?php

namespace App\Filters;

use codeIgniter\Filters\FIlterInterface;
use codeIgniter\HTTP\RequestInterface;
use codeIgniter\HTTP\ResponseInterface;

class AuthenticatedFilter implements FilterInterface

{

    public function before(RequestInterface $request, $args = null)
    {
        $session = session();

        if ($session->has('loggedIn') && $session->get('loggedIn') == true) {
            return $request;
        } else {
            return redirect()->to('login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $args = null)
    {
    }
}