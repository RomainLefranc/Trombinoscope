<?php
$selectionInitiale = "";
foreach(range('A','Z') as $i) {
    $selectionInitiale.='<a class="btn btn-primary " href="initiale.php?initiale='.$i.'" role="button">'.$i.'</a>';
}
?>