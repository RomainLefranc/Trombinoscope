<?php
include "modele/section_manager.php";
include "modele/fiche_manager.php";
if (isset($_SESSION["user"]) && verifSection() && verifStagiaire()) {

    $codSta = $_GET["stagiaire"];
    $codSec = $_GET["section"];

    /* Récuperation des infos de la section */
    $Section = getInfoSec($codSec);
    $nomSection = $Section["libSec"];
    $dateDebut = $Section["datDebSec"];
    $nbSta = $Section["cptSta"];


    /* Récuperation des infos du stagiaire */
    $Stagiaire = getInfoSta($codSta,$codSec);
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
} else {
    $view = "403";
}
include "view/$view.php";

?>