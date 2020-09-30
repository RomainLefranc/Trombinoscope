<?php

function verifSession() {
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        $view = "403";
    }
}
function verifInitiale() {
    if (isset($_GET["initiale"]) && !empty($_GET["initiale"]) && !is_numeric($_GET["initiale"])) {
        return true;
    } else {
        header("location: index.php?action=T&erreur=1");
    }
}
function verifSection() {
    if (isset($_GET["section"]) && !empty($_GET["section"] ) && is_numeric($_GET["section"])) {
        return true;
    } else {
        header("location: index.php?action=T&erreur=2");
    }
}
function verifStagiaire(){
    if (isset($_GET["stagiaire"]) && !empty($_GET["stagiaire"] && is_numeric($_GET["stagiaire"]))) {
        return true;
    } else {
        header("location: index.php?action=T&erreur=3");
    }
}
function verifAction(){
    if (isset($_GET["action"])) {
       return true;
    } else {
        header("location: index.php?action=A");
    }
}
function genererHTML() {
    include "modele/data.php";
    $pages = array (["A","accueil"],["T","trombi"],["S","section"],["I","initiale"],["F","fiche"],["D","deconnexion"]);
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
};
?>