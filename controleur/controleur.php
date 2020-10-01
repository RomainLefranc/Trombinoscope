<?php

function verifSession() {
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        $view = "403";
    }
}
function verifInitiale() {
    if (isset($_GET["initiale"]) && !empty($_GET["initiale"]) && !is_numeric($_GET["initiale"]) && strlen($_GET["initiale"]) == 1) {
        return true;
    } else {
        header("location: index.php?action=T&erreur=1");
    }
}
function verifSection() {
    if (isset($_GET["section"]) && !empty($_GET["section"] ) && is_numeric($_GET["section"]) ) {
        return true;
    } else {
        header("location: index.php?action=T&erreur=2");
    }
}
function verifStagiaire() {
    if (isset($_GET["stagiaire"]) && !empty($_GET["stagiaire"] && is_numeric($_GET["stagiaire"]))) {
        return true;
    } else {
        header("location: index.php?action=T&erreur=3");
    }
}
function verifAction() {
    if (isset($_GET["action"])) {
       return true;
    } else {
        header("location: index.php?action=A");
    }
}
function verifSessionAdmin() {
    if ($_SESSION['user'] == "boss") {
        return true;
    } else {
        $view = "403";
    }
}
function verifVue() {
    if (isset($_GET["vue"]) && !empty($_GET["vue"])) {
        return true;
    } else {
        header("location : index.php?action=L&erreur=1");
    }
}
?>