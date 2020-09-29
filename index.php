<?php
include "modele/data.php";
session_start();
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
}

if (!isset($_GET["action"]) || $_GET["action"] == "A") {
    include "controleur/C_accueil.php";
} elseif ($_GET["action"] == "T" ) {
    include "controleur/C_trombi.php";
} elseif ($_GET["action"] == "S") {
    include "controleur/C_section.php";
} elseif ($_GET["action"] == "I") {
    include "controleur/C_initiale.php";
} elseif ($_GET["action"] == "F") {
    include "controleur/C_fiche.php";
} elseif ($_GET["action"] == "D") {
    include "controleur/C_deconnexion.php";
} else {
    include "view/404.php";
}
?>