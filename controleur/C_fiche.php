<?php
include "modele/section_manager.php";
include "modele/fiche_manager.php";
if (verifSession() && verifSection() && verifStagiaire()) {
    $codSta = $_GET["stagiaire"];
    $codSec = $_GET["section"];
    $donneeSections = getInfoSec($codSec);
    $nomSection = $donneeSections[0][0];
    $dateDebut = $donneeSections[0][1];
    $nbSta = $donneeSections[0][2];
    $donneeStagiaire = getInfoSta($codSta);
    $prenomStagiaire = $donneeStagiaire[0][0];
    $nomStagiaire = $donneeStagiaire[0][1];
    $dateNaiss = $donneeStagiaire[0][2];
    $villeSta = $donneeStagiaire[0][3];
    
    $interne = $donneeStagiaire[0][4];
    $telephone = $donneeStagiaire[0][5];
    $mail = $donneeStagiaire[0][6];
    $view = "fiche";
}
include "view/$view.php";

?>