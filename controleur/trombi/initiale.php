<?php
$selectionInitiale = "";

foreach(range('A','Z') as $i) {
    $cpt = 0;
    $disabled = "";
    foreach ($donneeStagiaire as $stagiaire) {
        if ($i == substr($stagiaire[2],0,1)) {
            $cpt++;
        }
    }
    if ($cpt == 0) {
        $disabled = "disabled";
    }
    $selectionInitiale.='<a class="btn btn-primary initiale '.$disabled.'" data-toggle="tooltip" title="'.$cpt.'" href="initiale.php?initiale='.$i.'&page=1" role="button">'.$i.'</a>';

    
}
?>