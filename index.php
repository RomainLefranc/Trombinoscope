<?php
    include "controleur/connexion.php";
    include "controleur/dateServeur.php";
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
    </head>
    <body>
        <?php
            include "modele/accueil_navbar.php";
            include "modele/accueil_header.php";
        ?>
        <div class="container">
            <div class="row">
                <?php 
                    include "modele/accueil_zoneA.php";
                    include "modele/accueil_zoneB.php";
                ?>
            </div>
            <div class="row">
                <?php 
                    include "modele/accueil_zoneC.php";
                    include "modele/accueil_zoneD.php";
                    include "modele/accueil_zoneE.php";
                ?>
            </div>
        </div>
        <?php
            include "modele/footer.php";
            include "controleur/dateLocale.php";
        ?> 
    </body>
</html>
