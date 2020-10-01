<?php
if (verifSession() && verifInitiale()) {
    include "modele/initiale_manager.php";
    $initiale = $_GET["initiale"];
    $donneeStagiaire = getInitiale($initiale);
    $donnee = "";
    foreach ($donneeStagiaire as $stagiaire) {
        $donnee.= '
            <tr>
                <th class="align-middle " >'.$stagiaire[0].'</th>
                <th class="align-middle " >'.$stagiaire[1].'</th>
                <th class="align-middle " >'.$stagiaire[2].'</th>
                <th class="align-middle " >'.$stagiaire[3].'</th>
                <th class="align-middle " >'.$stagiaire[4].'</th>
                <th class="align-middle " ><img src="https://via.placeholder.com/100x100.png?text='.$stagiaire[2].'" alt="">
                <th class="align-middle " ><a class="btn btn-primary" href="index.php?action=F&stagiaire='.$stagiaire[1].'&section='.$stagiaire[5].'" role="button"><i class="fas fa-eye"></i></a></th>
            </tr>
            ';
    }
    $view = "initiale";
}
include "view/$view.php";



?>