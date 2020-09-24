<?php
    include "modele/data.php";
    $donnee = "";
    foreach ($donneeStagiaire as $stagiaire) {
        if ($codeSection == $stagiaire[0]) {
            $donnee.= '
            <tr>
                <th class="align-middle text-center" scope="col">'.$stagiaire[1].'</th>
                <th class="align-middle text-center" scope="col">'.$stagiaire[2].'</th>
                <th class="align-middle text-center" scope="col">'.$stagiaire[3].'</th>
                <th class="align-middle text-center" scope="col">'.$stagiaire[6].'</th>
                <th class="align-middle text-center" scope="col"><a class="btn btn-primary" href="fiche.php?stagiaire='.$stagiaire[1].'&section='.$stagiaire[0].'" role="button"><i class="fas fa-eye"></i></a></th>
            </tr>
            ';
        }
    }
    if ($donnee == "") {
        $donnee = "Aucun stagiaire dans cet section.";
    }
?>