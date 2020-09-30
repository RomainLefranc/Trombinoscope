<?php
if (verifSession() && verifSection() && verifStagiaire()) {
    $codeStagiaire = $_GET["stagiaire"];
    $codeSection = $_GET["section"];
    foreach ($donneeSections as $section) {
        if ($codeSection == $section[0]) {
            $nomSection = $section[1];
            $dateDebut = $section[2];
            $nbSta = $section[3];
        }
    }
    foreach ($donneeStagiaire as $stagiaire) {
        if ($codeStagiaire == $stagiaire[1] && $stagiaire[0] == $codeSection) {
            $prenomStagiaire = $stagiaire[2];
            $nomStagiaire = $stagiaire[3];
            $dateNaiss = $stagiaire[4];
            $villeSta = $stagiaire[5];
            $interne = $stagiaire[6];
            $telephone = $stagiaire[7];
            $mail = $stagiaire[8];
        }
    }
    $view = "fiche";
}
include "view/$view.php";

?>