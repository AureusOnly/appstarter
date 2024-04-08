<?php

namespace App\Controllers;

class Connection extends BaseController
{
    public function index(): string
    {
        return view("login_form");
    }
    public function attemptLogin()
    {
    $values = $this->request->getPost(['login', 'password']);
        if (!empty($values) && $values['login'] == APP_ADMIN_LOGIN &&
        $values['password'] == APP_ADMIN_PASSWORD) {
            return redirect("/home");
        }   else {
            return  "Connexion impossible";
        }
    
    }
}