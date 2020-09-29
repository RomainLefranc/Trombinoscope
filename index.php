<?php
include "modele/data.php";
session_start();
if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "A":
            include "controleur/C_accueil.php";
            break;
        case "T":
            include "controleur/C_trombi.php";
            break;
        case 'S':
            include "controleur/C_section.php";
            break;
        case 'I':
            include "controleur/C_initiale.php";
            break;
        case 'F':
            include "controleur/C_fiche.php";
            break;
        case 'D':
            include "controleur/C_deconnexion.php";
            break;
        default:
            include "view/404.php";
            break;
    }
} else {
    include "controleur/C_accueil.php";
}
?>