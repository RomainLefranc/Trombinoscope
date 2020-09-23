<?php
    include "data.php";
    $donnee = "";
    foreach ($donneeSections as $section) {
        $donnee.= '
        <tr>
            <th scope="col">'.$section[0].'</th>
            <th scope="col">'.$section[1].'</th>
            <th scope="col">'.$section[2].'</th>
            <th scope="col">'.$section[3].'</th>
            <th scope="col"><button type="button" class="btn btn-primary">Voir</button></th>
        </tr>
        ';
    }

?>