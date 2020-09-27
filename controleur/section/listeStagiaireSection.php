<?php
    include "modele/data.php";
    $donnee = "";
    foreach ($donneeStagiaire as $stagiaire) {
        if ($codeSection == $stagiaire[0]) {
            $donnee.= '
            <tr class="text-center">
                <th class="align-middle">'.$stagiaire[1].'</th>
                <th class="align-middle">'.$stagiaire[2].'</th>
                <th class="align-middle">'.$stagiaire[3].'</th>
                <th class="align-middle">'.$stagiaire[6].'</th>
                <th class="align-middle"><img class="img-fluid"src="https://via.placeholder.com/100x100.png?text='.$stagiaire[2].'" alt="">
                <th class="align-middle"><a class="btn btn-primary" href="fiche.php?stagiaire='.$stagiaire[1].'&section='.$stagiaire[0].'" role="button"><i class="fas fa-eye"></i></a></th>
            </tr>
            ';
        }
    }
    if ($donnee == "") {
        $donnee = "Aucun stagiaire dans cet section.";
    }
?>