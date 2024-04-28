<?php

namespace App\Controllers;

class Abonnes extends BaseController
{
    public function index(): string
    {
        $session = session();
        $template =
            view('templates/header', [
                'loggedIn' => $session->get('loggedIn'),
                'name' => $session->get('username')
            ]) . view('abonnes') . view('templates/side_menu').
            view('templates/footer');
        return $template;

     
    }
}
