<?php
include "modele/section_manager.php";
include "modele/fiche_manager.php";
if (verifSession() && verifSection() && verifStagiaire()) {
    $codSta = $_GET["stagiaire"];
    $codSec = $_GET["section"];
    $Section = getInfoSec($codSec);
    $nomSection = $Section["libSec"];
    $dateDebut = $Section["datDebSec"];
    $nbSta = $Section["cptSta"];
    $Stagiaire = getInfoSta($codSta);
    $prenomStagiaire = $Stagiaire["preSta"];
    $nomStagiaire = $Stagiaire["nomSta"];
    $dateNaiss = $Stagiaire["datNaisSta"];
    $villeSta = $Stagiaire["villeSta"];

    if ($Stagiaire["interneSta"] == 0) {
        $Stagiaire["interneSta"] = "Non"  ;      
    } else {
        $Stagiaire["interneSta"] = "Oui";
    }
    $interne = $Stagiaire["interneSta"];
    $telephone = $Stagiaire["gsmSta"];
    $mail = $Stagiaire["mailSta"];
    $view = "fiche";
}
include "view/$view.php";

?>