<?php
include "modele/initiale_manager.php";
if (isset($_SESSION["user"]) && verifInitiale()) {
    $initiale = $_GET["initiale"];

    /* Préparation du html pour la view  */
    $listeStagiaires = getListeStagiaireInitiale($initiale); /* Récuperation des données BDD sous un array */
    $html = "";
    foreach ($listeStagiaires as $stagiaire) {
        $html.= '
            <tr>
                <th class="align-middle " >'.$stagiaire["codSec"].'</th>
                <th class="align-middle " >'.$stagiaire["codSta"].'</th>
                <th class="align-middle " >'.$stagiaire["nomSta"].'</th>
                <th class="align-middle " >'.$stagiaire["preSta"].'</th>
                <th class="align-middle " >'.$stagiaire["dateNaisSta"].'</th>
                <th class="align-middle " ><img src="https://via.placeholder.com/100x100.png?text='.$stagiaire["nomSta"].'" alt="">
                <th class="align-middle " ><a class="btn btn-primary" href="index.php?action=F&stagiaire='.$stagiaire["codSta"].'&section='.$stagiaire["codSec"].'" role="button"><i class="fas fa-eye"></i></a></th>
            </tr>
            ';
    }
    $view = "initiale";
} else {
    $view = "403";
}
include "view/$view.php";



?>