namespace App\Controllers;

class Demandes extends BaseController
{
    public function afficherListe()
    {
        // Récupérez toutes les demandes passées (par exemple, depuis une base de données)
        $demandes = $this->demandeModel->getDemandesPassees(); 
        
        // Transmettez les demandes à la vue pour l'affichage
        return view('liste_des_demandes', ['demandes' => $demandes]);
    }
}

