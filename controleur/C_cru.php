<?php
if (isset($_SESSION["user"]) && verifSessionAdmin() && verifVue()) {
    switch ($_GET["vue"]) {
        case "new":
            # code...
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
} else {
    $view = "403";
}
include "view/$view.php";
?>