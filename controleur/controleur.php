<?php

function verifSession() {
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        $view = "403";
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