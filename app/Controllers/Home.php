<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $session = session();
        $template = 
            view('templates/header', [
                'loggedIn' =>$session->get('logedIn'),
                'name' =>$session->get('username')
            ]) . 
            view('templates/footer');
            return $template;
     
        return view('admin_accueil');
    }
}
