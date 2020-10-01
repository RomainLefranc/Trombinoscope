<?php
if (verifSession() && verifSessionAdmin()) {
    include "modele/gestion_manager.php";
    $donnee = "";
    $donneeStagiaire = getStagiaire();
    foreach ($donneeStagiaire as $stagiaire) {
        $donnee.= '
        <tr>
            <th class="align-middle " >'.$stagiaire[0].'</th>
            <th class="align-middle " >'.$stagiaire[1].'</th>
            <th class="align-middle " >'.$stagiaire[2].'</th>
            <th class="align-middle " >'.$stagiaire[3].'</th>
            <th class="align-middle " >'.$stagiaire[4].'</th>
            <th class="align-middle " ><img src="https://via.placeholder.com/100x100.png?text='.$stagiaire[2].'" alt="">
            <th class="align-middle">
            <a class="btn btn-primary" href="index.php?action=C&vue=update&stagiaire='.$stagiaire[1].'&section='.$stagiaire[5].'" role="button"><i class="fas fa-pen"></i></a>
            <a class="btn btn-primary" href="index.php?action=C&vue=read&stagiaire='.$stagiaire[1].'&section='.$stagiaire[5].'" role="button"><i class="fas fa-eye"></i></a>
            <a class="btn btn-primary" href="index.php?action=S&stagiaire='.$stagiaire[1].'&section='.$stagiaire[5].'" role="button"><i class="fas fa-times"></i></a></th>
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