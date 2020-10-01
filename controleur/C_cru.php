<?php
if (verifSession() && verifSessionAdmin() && verifVue()) {
    switch ($_GET["vue"]) {
        case "new":
            
            break;
        case 'read':
            # code...
            break;
        case 'update':
            # code...
            break;
        default:
            header("location: index.php?action=L&erreur=1");
            break;
    }

    include "view/$view.php";
}
?>