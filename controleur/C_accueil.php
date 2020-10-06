<?php
    include "modele/users_manager.php";

    /* Date et heure coté serveur */
    setlocale(LC_TIME, 'fr_FR');
    $dateServeur = strftime("%A %d %B %Y");
    $heureServeur = strftime("%H:%M");

    /* Liste des news */
    $html = "";
    $listeNews = getNews(5);
    foreach ($listeNews as $news) {
        $html.= '<li class="list-group-item">'.$news[0].'</li>';
    }

    /* Gestion de la connexion */
    if (isset($_POST["login"]) && isset($_POST["mdp"])) {
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];
        $userExiste = verifUserExiste($login,md5($mdp));
        if ($userExiste) {
            $_SESSION["user"] = $login;
            $_SESSION['role'] = getRoleUser($login);
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