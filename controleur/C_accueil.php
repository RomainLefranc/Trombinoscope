<?php
    include "modele/users_manager.php";

    /* Date et heure coté serveur */
    setlocale(LC_TIME, 'fr_FR');
    $dateServeur = strftime("%A %d %B %Y");
    $heureServeur = strftime("%H:%M");

    /* Preparation de l'HTML de la liste des 5 derniere news de la view accueil */
    $html = "";
    $listeNews = getNews(5);
    $target = new Datetime();
    foreach ($listeNews as $news) {
    $origin = new Datetime($news['datNews']);
    $interval = date_diff($origin, $target);
        $html.= "
        <div class='card m-1' >
            <div class='card-body'>
                <h5 class='card-title'>".$interval->format('Il y a %a jours')."</h5>
                <h6 class='card-subtitle mb-2 text-muted'>".$news['libNews']."</h6>
            </div>
        </div>";
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