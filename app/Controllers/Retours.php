<?php

namespace App\Controllers;

class Retours extends BaseController
{
    public function index(): string
    {
        $session = session();
        $template =
            view('templates/header', [
                'loggedIn' => $session->get('loggedIn'),
                'name' => $session->get('username')
            ]) . view('retours') .
            view('templates/footer');
        return $template;

     
    }
}
