<?php
include "modele/data.php";
if (isset($_GET["section"]) && isset($_GET["stagiaire"])) {
    if (!empty($_GET["section"]) && !empty($_GET["stagiaire"])) {
        $codeStagiaire = $_GET["stagiaire"];
        $codeSection = $_GET["section"];
        foreach ($donneeSections as $section) {
            if ($codeSection == $section[0]) {
                $nomSection = $section[1];
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
    }
} else {
    header("location: trombi.php");
}
?>