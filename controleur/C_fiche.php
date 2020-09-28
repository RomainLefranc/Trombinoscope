<?php
if (isset($_SESSION['user'])) {
    if (isset($_GET["section"]) && isset($_GET["stagiaire"]) && !empty($_GET["section"]) && !empty($_GET["stagiaire"])) {
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
    } else {
        header("location: index.php?action=T&Erreur=3");
    }
} else {
    include "403.php";
}

?>