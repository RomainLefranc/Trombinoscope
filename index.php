<?php

/* include "modele/data.php"; */
/* if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "A":
            include "controleur/C_accueil.php";
            break;
        case "T":
            include "controleur/C_trombi.php";
            break;
        case 'S':
            include "controleur/C_section.php"
;            break;
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
    header("location: index.php?action=A");
} */
include "controleur/controleur.php";
session_start();
genererHTML();
?>