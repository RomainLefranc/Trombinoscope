<?php
if (isset($_GET["section"])) {
    if (!empty($_GET["section"])) {
        $section = $_GET["section"];
    }
} else {
    header("location: trombi.php");
}
?>