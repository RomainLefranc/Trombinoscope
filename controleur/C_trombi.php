<?php
if (isset($_SESSION["user"])) {
    include "modele/trombi_manager.php";
    $user = $_SESSION["user"];
    $selectionInitiale = "";
    foreach(range('A','Z') as $i) {
        $disabled = "";
        $cpt = getNbInitiale($i);
        if ($cpt == 0) {
            $disabled = "disabled";
        }
        $selectionInitiale.='<a class="btn btn-primary initiale '.$disabled.'" data-toggle="tooltip" data-placement="bottom" title="'.$cpt.'" href="index.php?action=I&initiale='.$i.'&page=1" role="button">'.$i.'</a>';

    }
    $donnee = "";
    $donneeSections = getListeSecTrombi();
    foreach ($donneeSections as $section) {
        $disabled = "";
        if ($section["cptSta"] == 0) {
            $disabled = "disabled";
        }
        $donnee.= 
        '<tr>
            <th class="align-middle">'.$section["codSec"].'</th>
            <th class="align-middle">'.$section["libSec"].'</th>
            <th class="align-middle">'.$section["datDebSec"].'</th>
            <th class="align-middle">'.$section["cptSta"].'</th>
            <th class="align-middle"><img class="img-fluid"src="media/sections/sect'.$section["codSec"].'.png">
            <th class="align-middle "><a class="btn btn-primary '.$disabled.'" href="index.php?action=S&section='.$section["codSec"].'" role="button"><i class="fas fa-eye"></i></a></th>
        </tr>';
    }
    $view = "trombi";
} else {
    $view = "403";
}
include "view/$view.php";
?>