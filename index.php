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

    </head>
    <body>
        <?php
            date_default_timezone_set('Indian/Reunion');
            $dateLocale = date("d/m/Y h:i:s");
            $dateServeur = getdate();
            $date = $dateServeur['mday'];
            $month = $dateServeur['mon'];
            $year = $dateServeur['year'];
            $hour = $dateServeur['hours'];
            $min = $dateServeur['minutes'];
            $sec = $dateServeur['seconds'];

            include "modele/navbar.php";
            include "modele/header.php";
            include "modele/connexion.php";
            include "modele/news.php";
            include "modele/footer.php";
        ?> 
    </body>
</html>
