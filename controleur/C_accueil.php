<?php
    setlocale(LC_TIME, 'fr_FR');
    $dateServeur = strftime("%A %d %B %Y");
    $heureServeur = strftime("%H:%M");

    if (isset($_POST["login"]) && isset($_POST["mdp"])) {
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];

        foreach ($donneeConnexion as $value) {
            if ($login == $value[0] && $mdp == $value[1]) {
                $_SESSION["user"] = $login;
                header ('location: index.php?action=T');
                exit;
            } else {
                $_POST["erreur"] = 1;
                include "view/accueil.php";
            }
        }
    } else {
        include "view/accueil.php";
    }

?>