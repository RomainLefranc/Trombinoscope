<?php
if (verifSession()) {
    include "modele/trombi_manager.php";
    $user = $_SESSION["user"];
    $selectionInitiale = "";
    foreach(range('A','Z') as $i) {
        $disabled = "";
        $cpt = getNbInitiale($i);
        if ($cpt[0][0] == 0) {
            $disabled = "disabled";
        }
        $selectionInitiale.='<a class="btn btn-primary initiale '.$disabled.'" data-toggle="tooltip" data-placement="bottom" title="'.$cpt[0][0].'" href="index.php?action=I&initiale='.$i.'&page=1" role="button">'.$i.'</a>';
    }
    $donnee = "";
    $donneeSections = getListeSec();
    foreach ($donneeSections as $section) {
        $disabled = "";
        if ($section[3] == 0) {
            $disabled = "disabled";
        }
        $donnee.= 
        '<tr>
            <th class="align-middle">'.$section[0].'</th>
            <th class="align-middle">'.$section[1].'</th>
            <th class="align-middle">'.$section[2].'</th>
            <th class="align-middle">'.$section[3].'</th>
            <th class="align-middle"><img class="img-fluid"src="https://via.placeholder.com/100x100.png?text='.$section[1].'" alt="">
            <th class="align-middle "><a class="btn btn-primary '.$disabled.'" href="index.php?action=S&section='.$section[0].'" role="button"><i class="fas fa-eye"></i></a></th>
        </tr>';
    }
    $view = "trombi";
}
include "view/$view.php";
?>