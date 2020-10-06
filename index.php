<?php

session_start();
include "controleur/controleur.php";/* Outil permettant la verification des parametre reçus */
$pages = array (["A","accueil"],["T","trombi"],["S","section"],["I","initiale"],["F","fiche"],["D","deconnexion"],["L","gestion"],["C","cru"]);
$controlExiste = false;
if (verifAction()) {
    foreach ($pages as $page) {
        if ($page[0] == $_GET['action']) {
            include "controleur/C_$page[1].php";
            $controlExiste = true;
        }
    }
    if (!$controlExiste) {
        include "view/404.php";
    }
};
?>