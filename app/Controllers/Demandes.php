<?php

namespace App\Controllers;

class Demandes extends BaseController
{
    public function index(): string
    {
        $session = session();
        $template =
            view('templates/header', [
                'loggedIn' => $session->get('loggedIn'),
                'name' => $session->get('username')
            ]) . view('demandes') .  view('templates/side_menu') .
            view('templates/footer');
        return $template;
    }
}