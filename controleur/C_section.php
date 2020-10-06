<?php
include "modele/section_manager.php";
if (isset($_SESSION["user"]) && verifSection()) {
    $codSec = $_GET["section"];
    $nomSection = getNomSec($codSec);
    $html = "";

    $donneeStagiaire = getListeStagiaireSec($codSec);
    foreach ($donneeStagiaire as $stagiaire) {
        if ($stagiaire["interneSta"] == 0) {
            $stagiaire["interneSta"] = "Non"  ;      
        } else {
            $stagiaire["interneSta"] = "Oui";
        }
        $html.= '
            <tr class="text-center">
                <th class="align-middle">'.$stagiaire["codSta"].'</th>
                <th class="align-middle">'.$stagiaire["nomSta"].'</th>
                <th class="align-middle">'.$stagiaire["preSta"].'</th>
                <th class="align-middle">'.$stagiaire["interneSta"].'</th>
                <th class="align-middle"><img class="img-fluid"src="media/stagiaires/sect'.$_GET["section"].'_'.$stagiaire["codSta"].'.png" alt="">
                <th class="align-middle"><a class="btn btn-primary" href="index.php?action=F&stagiaire='.$stagiaire["codSta"].'&section='.$_GET["section"].'" role="button"><i class="fas fa-eye"></i></a></th>
            </tr>';
    }
    if ($html == "") {
        $html = "Aucun stagiaire dans cet section.";
    }
    $view = "section";
} else {
    $view = "403";
}
include "view/$view.php";

?>