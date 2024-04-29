<?php

namespace App\Controllers;

class Connection extends BaseController
{
    public function index(): string
    {

        $template =
            view('templates/header.php') .
            view('login_form') .
            view('templates/footer.php');

        return $template;
    }
    public function deconnexion()
    {
        $abonneModel = new \App\Models\abonne();

        $values = $this->request->getPost(['login', 'password']);
        if (
            !empty($values) && $values['login'] == APP_ADMIN_LOGIN &&
            $values['password'] == APP_ADMIN_PASSWORD
        ) {
            return $this->loginUser();
        } else {
            return redirect()->to("/login");
        }
        $rechercheabonne = $abonneModel->getAbonneByMatricule($values['login']);

        if (isset($rechercheabonne) && $rechercheabonne['nom_abonne'] === $values['password'])
            return $this->loginUser($rechercheabonne);
        else {
            return redirect()->to('/login');
        }
    }
}
