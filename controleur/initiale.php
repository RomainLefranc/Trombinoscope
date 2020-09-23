<?php
$selectionInitiale = "";
foreach(range('A','Z') as $i) {
    $selectionInitiale.= '<button type="button" class="btn btn-primary">'.$i.'</button>';
}
?>