<?php
    include "../controleur/session.php";
    include "../controleur/listesection.php";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trombinoscope</title>

        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="../css/style.css">
    </head>
<body>
    <?php
        include "../modele/trombi_header.php";
        include "../modele/trombi_listeSections.php";
        include "../modele/footer_fixed.php";
    ?>
</body>
</html>