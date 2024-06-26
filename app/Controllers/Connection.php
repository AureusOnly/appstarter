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
    public function attemptLogin()
    {
        $abonneModel = new \App\Models\abonne();
        
        $values = $this->request->getPost(['login', 'password']);
        $rechercheabonne = $abonneModel->getAbonneByMatricule($values['login']);
        if (
            !empty($values) && $values['login'] == APP_ADMIN_LOGIN &&
            $values['password'] == APP_ADMIN_PASSWORD
        ) {
            return $this->loginUser();
        } else if (
            isset($rechercheabonne) && $rechercheabonne['nom_abonne'] === $values['password']
        ) {
            return $this->loginUser((object) $rechercheabonne);
        }
        else {
            return redirect()->to("/login");
        }
        
        // if (isset($rechercheabonne) && $rechercheabonne['nom_abonne'] === $values['password'])
        //     return $this->loginUser($rechercheabonne);
        // else {
        //     return redirect()->to('/login');
        // }
    }


    private function loginUser(?object $user = null)
    {
        $session = session();
        $data = (array) $user;
            $session->set([
                'username' => isset($user) ? (strtoupper($data['nom_abonne'])) : 'Administrator',
                'role' => isset($user) ? 'user' : 'admin',
                'loggedIn' => true
            ]);
        return redirect()->to("home");
    }
}