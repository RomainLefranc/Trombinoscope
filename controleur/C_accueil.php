<?php
    include "modele/users_manager.php";

    setlocale(LC_TIME, 'fr_FR');
    $dateServeur = strftime("%A %d %B %Y");
    $heureServeur = strftime("%H:%M");

    $donnee = "";
    $news = getNews(5);
    foreach ($news as $new) {
        $donnee.= '<li class="list-group-item">'.$new[0].'</li>';
    }

    if (isset($_POST["login"]) && isset($_POST["mdp"])) {
        $ConnexionEstValide = Connexion($_POST["login"],$_POST["mdp"]);
        if ($ConnexionEstValide) {
            $_SESSION["user"] = $_POST["login"];
            $_SESSION['role'] = getRole($_POST["login"]);

            header ('location: index.php?action=T');
        } else {
            $_POST["erreur"] = 1;
            $view = "accueil";
        }
    } else {
        $view = "accueil";
    }

    include "view/$view.php";

?>