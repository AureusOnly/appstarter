<?php

namespace App\Controllers;

class Connection extends BaseController
{
    public function index(): string
    {
        return view("login_form");
    }
    public function attemptLogin(): string
    {
        $values = $this->request->getPOST(['login', 'password']);
        if(!empty($values) && $values['login'] == APP_ADMIN_LOGIN && $values['password' == APP_ADMIN_PASSWORD])
        {
            return "On a reussi à sa connecter !";
        } else {
            return" On a pas reussi à se connecter !";
        }
    }
}