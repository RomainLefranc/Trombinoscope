<?php
    include "modele/users_manager.php";
    setlocale(LC_TIME, 'fr_FR');
    $dateServeur = strftime("%A %d %B %Y");
    $heureServeur = strftime("%H:%M");

    $donnee = "";
    $news = getNews(5,$donneeNews);
    foreach ($news as $new) {
        $donnee.= 
        '
        <li class="list-group-item">'.$new.'</li>
        ' ;
    }
    if (isset($_POST["login"]) && isset($_POST["mdp"])) {
        $login = $_POST["login"];
        $test = Connexion();
        if ($test[0][0] >= 1) {
            $_SESSION["user"] = $login;
            header ('location: index.php?action=T');
            exit;
        } else {
            $_POST["erreur"] = 1;
            $view = "accueil";
        }
    } else {
        $view = "accueil";
    }
    include "view/$view.php";

?>