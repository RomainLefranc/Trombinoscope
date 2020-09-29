<?php
session_start();
/* if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "A":
            $control = "accueil";
            break;
        case "T":
            $control = "trombi";
            break;
        case 'S':
            $control = "section"
;            break;
        case 'I':
            $control = "initiale";
            break;
        case 'F':
            $control = "fiche";
            break;
        case 'D':
            $control = "deconnexion";
            break;
        default:
            $view = "404";
            break;
    }
} else {
    $control = "accueil";
};
include "controleur/C_$control.php";
include "view/$view.php"; */

function genererHTML() {

    include "modele/data.php";

    $pages = array (["A","accueil"],["T","trombi"],["S","section"],["I","initiale"],["F","fiche"],["D","deconnexion"]);

    $control = "accueil";

    if (isset($_GET["action"])) {
        $action = $_GET['action'];
        foreach ($pages as $page) {
            if ($page[0] == $action) {
                $control = $page[1];
            }
        }
    };
    include "controleur/C_$control.php";
    include "view/$view.php";
};
genererHTML();
?>