<?php
    include "controleur/session.php";
    include "controleur/listesection.php";
    include "controleur/initiale.php";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trombinoscope</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- FONT AWESOME -->
        <script src="./assets/efcb5b7b29.js"></script>
        <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
        <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet">
        <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">

        <!-- JS PERSO -->
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <?php
        include "view/trombi/trombi_header.php";  
    ?>
    <div class="container">
        <?php
            include "view/trombi/trombi_listeSections.php";
            include "view/trombi/trombi_zoneInitiale.php";
        ?>
    </div>
    <?php
        include "view/footer.php";
    ?>
</body>
</html>