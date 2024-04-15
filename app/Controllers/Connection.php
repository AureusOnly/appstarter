<?php

namespace App\Controllers;

use PhpParser\Node\Expr\New_;

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
    public function attemptLogin()
    {
        $abonneModel = new \App\Models\abonne();

        $values = $this->request->getPost(['login', 'password']);
        if (
            !empty($values) && $values['login'] == APP_ADMIN_LOGIN &&
            $values['password'] == APP_ADMIN_PASSWORD
        ) {
            return redirect()->to("/home");
        } else {
            return redirect()->to("/login");
        }
        $rechercheAbonne = $abonneModel->getAbonneByMatricule($values['login']);

        if (isset($rechercheAbonne) && $rechercheAbonne['nom_abonne'] === $values['password'])
            return $this->loginUser($rechercheAbonne);
        else {
            return redirect()->to('/login');
        }
    }


    private function loginUser(?object $user = null)
    {
        $session = session();
            $session->set([
                'username' => isset($user) ? ($user['nom_abonne'] . strtoupper($user['nom_abonne'])) : 'Administrator',
                'loggedIn' => true
            ]);
        return redirect()->to("home");
    }
}
