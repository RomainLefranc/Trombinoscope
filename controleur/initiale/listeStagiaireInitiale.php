<?php
    include "modele/data.php";
    $donnee = "";
    foreach ($donneeStagiaire as $stagiaire) {
        if ($initiale == substr($stagiaire[2],0,1)) {
            $donnee.= '
            <tr>
                <th class="align-middle text-center" scope="col">'.$stagiaire[0].'</th>
                <th class="align-middle text-center" scope="col">'.$stagiaire[1].'</th>
                <th class="align-middle text-center" scope="col">'.$stagiaire[2].'</th>
                <th class="align-middle text-center" scope="col">'.$stagiaire[3].'</th>
                <th class="align-middle text-center" scope="col">'.$stagiaire[4].'</th>
                <th class="align-middle text-center" scope="col"><img class="img-fluid"src="https://via.placeholder.com/100x100.png?text='.$stagiaire[2].'" alt="">
                <th class="align-middle text-center" scope="col"><a class="btn btn-primary" href="fiche.php?stagiaire='.$stagiaire[1].'&section='.$stagiaire[0].'" role="button"><i class="fas fa-eye"></i></a></th>
            </tr>
            ';
        }
    }
?>