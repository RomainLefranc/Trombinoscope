<?php
$selectionInitiale = "";
foreach(range('A','Z') as $i) {
    
    $selectionInitiale.='<a class="btn btn-primary initiale " data-toggle="tooltip" title="Some tooltip text!" href="initiale.php?initiale='.$i.'&page=1" role="button">'.$i.'</a>';
}
?>