<?php

    include "controleur/session.php";
    include "controleur/recupParamInitiale.php";
    include "controleur/listeStagiaireInitiale.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT AWESOME -->
    <script src="./assets/efcb5b7b29.js"></script>
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include "view/initiale/initiale_header.php";
        include "view/initiale/initiale_listeStagiaires.php";
        include "view/footer_fixed.php";
    ?>
</body>
</html>