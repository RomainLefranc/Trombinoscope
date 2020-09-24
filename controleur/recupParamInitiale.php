<?php

if (isset($_GET["initiale"])) {
    if (!empty($_GET["initiale"])) {
        $initiale = $_GET["initiale"];
    }
} else {
    header("location: trombi.php");
}
?>