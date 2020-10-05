<?php
if (verifSession() && verifSessionAdmin()) {
    include "modele/gestion_manager.php";
    $donnee = "";
    $listeStagiaire = getStagiaire();
    foreach ($listeStagiaire as $stagiaire) {
        $donnee.= '
        <tr>
            <th class="align-middle " >'.$stagiaire["codSec"].'</th>
            <th class="align-middle " >'.$stagiaire["codSta"].'</th>
            <th class="align-middle " >'.$stagiaire["nomSta"].'</th>
            <th class="align-middle " >'.$stagiaire["preSta"].'</th>
            <th class="align-middle " >'.$stagiaire["datNaisSta"].'</th>
            <th class="align-middle " ><img src="https://via.placeholder.com/100x100.png?text='.$stagiaire["nomSta"].'" alt="">
            <th class="align-middle">
            <a class="btn btn-primary" href="index.php?action=C&vue=update&stagiaire='.$stagiaire["codSta"].'&section='.$stagiaire["codSec"].'" role="button"><i class="fas fa-pen"></i></a>
            <a class="btn btn-primary" href="index.php?action=C&vue=read&stagiaire='.$stagiaire["codSta"].'&section='.$stagiaire["codSec"].'" role="button"><i class="fas fa-eye"></i></a>
            <a class="btn btn-primary" href="index.php?action=S&stagiaire='.$stagiaire["codSta"].'&section='.$stagiaire["codSec"].'" role="button"><i class="fas fa-times"></i></a></th>
        </tr>
        ';
    }
    if ($donnee == "") {
        $donnee = "Aucun stagiaire dans cet section.";
    }
    $view = "gestion";
}
include "view/$view.php";
?>