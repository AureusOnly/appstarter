<?php

namespace App\Controllers;

class Emprunts extends BaseController
{
    public function index(): string
    {
        $session = session();
        $template =
            view('templates/header', [
                'loggedIn' => $session->get('loggedIn'),
                'name' => $session->get('username')
            ]) . view('emprunts') .  view('templates/side_menu') .
            view('templates/footer');
        return $template;

     
    }
}
