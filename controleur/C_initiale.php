<?php
if (isset($_SESSION['user'])) {
    if (isset($_GET["initiale"]) && !empty($_GET["initiale"])) {
        $initiale = $_GET["initiale"];
        $donnee = "";
        foreach ($donneeStagiaire as $stagiaire) {
            if ($initiale == substr($stagiaire[2],0,1)) {
                $donnee.= '
                <tr>
                    <th class="align-middle " >'.$stagiaire[0].'</th>
                    <th class="align-middle " >'.$stagiaire[1].'</th>
                    <th class="align-middle " >'.$stagiaire[2].'</th>
                    <th class="align-middle " >'.$stagiaire[3].'</th>
                    <th class="align-middle " >'.$stagiaire[4].'</th>
                    <th class="align-middle " ><img src="https://via.placeholder.com/100x100.png?text='.$stagiaire[2].'" alt="">
                    <th class="align-middle " ><a class="btn btn-primary" href="index.php?action=F&stagiaire='.$stagiaire[1].'&section='.$stagiaire[0].'" role="button"><i class="fas fa-eye"></i></a></th>
                </tr>
                ';
            }
        }
        include "view/initiale.php";
    } else {
        header("location: index.php?action=T&erreur=2");
    }
 
} else {
    $view = "403";
}



?>