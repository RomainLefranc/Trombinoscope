<?php
    include "data.php";
    if (isset($_POST["login"]) && isset($_POST["mdp"])) {
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];
        foreach ($donneeConnexion as $value) {
            if ($login == $value[0] && $mdp == $value[1]) {
                session_start();
                $_SESSION["user"] = $login;
                header('Location: vue/trombi.php');
                exit;
            } else {
                $_POST["erreur"] = 1;
            }
        }
    }
?>