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

        <!-- CSS Perso -->
        <link rel="stylesheet" href="css/style.css">

         <!-- Jquery -->
        <script src="vendor/jquery/jquery.js"></script>

    </head>
    <body>
        <?php
            include "view/accueil/accueil_navbar.php";
            include "view/accueil/accueil_header.php";
        ?>
        <div class="container">
            <div class="row">
                <?php 
                    include "view/accueil/accueil_zoneA.php";
                    include "view/accueil/accueil_zoneB.php";
                ?>
            </div>
            <div class="row">
                <?php 
                    include "view/accueil/accueil_zoneC.php";
                    include "view/accueil/accueil_zoneD.php";
                    include "view/accueil/accueil_zoneE.php";
                ?>
            </div>
        </div>
        <?php
            include "view/footer.php";
            include "js/dateLocale.php";
        ?> 
    </body>
</html>
