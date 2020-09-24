<?php
include "modele/data.php";
if (isset($_GET["section"])) {
    if (!empty($_GET["section"])) {
        $codeSection = $_GET["section"];
        foreach ($donneeSections as $section) {
            if ($codeSection == $section[0]) {
                $nomSection = $section[1];
            }
        }
    }
} else {
    header("location: trombi.php");
}
?>