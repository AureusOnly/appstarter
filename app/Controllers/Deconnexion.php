<?php

namespace App\Controllers;

class Deconnexion extends BaseController
{
    public function deconnexion()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/login');
    }
}
