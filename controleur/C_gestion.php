<?php
if (isset($_SESSION["user"]) && verifSessionAdmin()) {
    include "modele/gestion_manager.php";
    
    /* Préparation du html pour la view  */
    $html = "";
    $listeStagiaires = getListeStagiaireGestion();
    foreach ($listeStagiaires as $sstagiaire) {
        $html.= '
        <tr>
            <th class="align-middle " >'.$stagiaire["codSec"].'</th>
            <th class="align-middle " >'.$stagiaire["codSta"].'</th>
            <th class="align-middle " >'.$stagiaire["nomSta"].'</th>
            <th class="align-middle " >'.$stagiaire["preSta"].'</th>
            <th class="align-middle " >'.$stagiaire["datNaisSta"].'</th>
            <th class="align-middle " ><img src="media/stagiaires/sect'.$stagiaire["codSec"].'_'.$stagiaire["codSta"].'.png" alt="">
            <th class="align-middle">
            <a class="btn btn-primary" href="index.php?action=C&vue=update&stagiaire='.$stagiaire["codSta"].'&section='.$stagiaire["codSec"].'" role="button"><i class="fas fa-pen"></i></a>
            <a class="btn btn-primary" href="index.php?action=C&vue=read&stagiaire='.$stagiaire["codSta"].'&section='.$stagiaire["codSec"].'" role="button"><i class="fas fa-eye"></i></a>
            <a class="btn btn-primary" href="index.php?action=S&stagiaire='.$stagiaire["codSta"].'&section='.$stagiaire["codSec"].'" role="button"><i class="fas fa-times"></i></a></th>
        </tr>
        ';
    }
    if ($html == "") {
        $html = "Aucun stagiaire dans cet section.";
    }

    $view = "gestion";
} else {
    $view = "403";
}
include "view/$view.php";
?>