<?php

namespace App\Http\Controllers;

class AfficherControlleur
{
    public function AfficherInfo($nom,$prenom,$age,$courriel){
        return view("affichage",[
            'infoNom'=>$nom,
            'infoPrenom'=>$prenom,
            'infoAge'=>$age,
            'infoCourriel'=>$courriel
        ]);
    }
}
