<?php
    include "data.php";
    $login = "";
    $mdp = "";
    $connexion = false;
    if (isset($_POST["login"]) && isset($_POST["mdp"])) {
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];
        foreach ($donneeConnexion as $value) {
            if ($login == $value[0] && $mdp == $value[1]) {
                header('Location: vue/trombi.php');
                exit;
                $connexion = true;
                $_SESSION["user"] = $login;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/business-frontpage.css" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
        <script src="vendor/jquery/jquery.js"></script>
        <script type="text/javascript" src="./js/date.js"></script>

    </head>
    <body>
        <?php
            setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            include "modele/navbar.php";
            include "modele/header.php";
            include "modele/connexion.php";
            include "modele/news.php";
            include "modele/footer.php";
        ?> 

    </body>

</html>
