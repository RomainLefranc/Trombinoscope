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
            setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            $heurelocale = strftime("%H");
            switch ($heurelocale) {
                case $heurelocale >= 14 && $heurelocale <= 18:
                    $messageAccueil = "Bon après midi";
                    break;
                
                case $heurelocale < 14:
                    $messageAccueil = "Bonjour";
                    break;

                case $heurelocale > 18:
                    $messageAccueil = "Bonsoir";
                    break;
            }
            include "modele/navbar.php";
            include "modele/header.php";
            include "modele/connexion.php";
            include "modele/news.php";
            include "modele/footer.php";
        ?> 
    </body>
</html>
