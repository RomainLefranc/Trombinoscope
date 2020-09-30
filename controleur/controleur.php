<?php

function verifSession() {
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        $view = "403";
    }
}
function verifInitiale() {
    if (isset($_GET["initiale"]) && !empty($_GET["initiale"])) {
        return true;
    } else {
        header("location: index.php?action=T&erreur=2");
    }
}
function verifSection() {
    if (isset($_GET["section"]) && !empty($_GET["section"])) {
        return true;
    } else {
        header("location: index.php?action=T&erreur=1");
    }
}
function verifStagiaire(){
    if (isset($_GET["stagiaire"]) && !empty($_GET["stagiaire"])) {
        return true;
    } else {
        header("location: index.php?action=T&erreur=1");
    }
}
?>