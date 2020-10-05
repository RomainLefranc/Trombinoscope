<?php
include "modele/section_manager.php";
if (verifSession() && verifSection()) {
    $codSec = $_GET["section"];
    $nomSection = getNomSec($codSec);
    $nomSection = $nomSection[0][0];
    $donnee = "";
    $donneeStagiaire = getStagiaire($codSec);
    foreach ($donneeStagiaire as $stagiaire) {
        if ($stagiaire["interneSta"] == 0) {
            $stagiaire["interneSta"] = "Non"  ;      
        } else {
            $stagiaire["interneSta"] = "Oui";
        }
        $donnee.= '
            <tr class="text-center">
                <th class="align-middle">'.$stagiaire["codSta"].'</th>
                <th class="align-middle">'.$stagiaire["nomSta"].'</th>
                <th class="align-middle">'.$stagiaire["preSta"].'</th>
                <th class="align-middle">'.$stagiaire["interneSta"].'</th>
                <th class="align-middle"><img class="img-fluid"src="https://via.placeholder.com/100x100.png?text='.$stagiaire["nomSta"].'" alt="">
                <th class="align-middle"><a class="btn btn-primary" href="index.php?action=F&stagiaire='.$stagiaire["codSta"].'&section='.$_GET["section"].'" role="button"><i class="fas fa-eye"></i></a></th>
            </tr>';
    }
    if ($donnee == "") {
        $donnee = "Aucun stagiaire dans cet section.";
    }
    $view = "section";
}
include "view/$view.php";

?>