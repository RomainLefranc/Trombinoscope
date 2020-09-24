<?php
if (isset($_GET["section"]) && isset($_GET["stagiaire"])) {
    if (!empty($_GET["section"]) && !empty($_GET["stagiaire"])) {
        $stagiaire = $_GET["stagiaire"];
        $section = $_GET["section"];
    }
} else {
    header("location: trombi.php");
}
?>