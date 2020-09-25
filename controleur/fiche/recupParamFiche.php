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
                $nomStagiaire = $stagiaire[2]." ".$stagiaire[3];
            }
        }
    }
} else {
    header("location: trombi.php");
}
?>