<?php

namespace App\Controllers;

class Connection extends BaseController
{
    public function index(): string
    {
        return view("login_form");
    }
}