<?php
    include "data.php";
    $donnee = "";
    foreach ($donneeSections as $section) {
        $donnee.= '
        <tr>
            <th class="align-middle text-center" scope="col">'.$section[0].'</th>
            <th class="align-middle" scope="col">'.$section[1].'</th>
            <th class="align-middle" scope="col">'.$section[2].'</th>
            <th class="align-middle" scope="col">'.$section[3].'</th>
            <th class="align-middle" scope="col"><img class="img-fluid"src="https://via.placeholder.com/100x100.png?text='.$section[1].'" alt="">
            <th class="align-middle" scope="col"><a class="btn btn-primary" href="../vue/section.php?section='.$section[0].'" role="button"><i class="fas fa-eye"></i></a></th>
            
        </tr>
        ';
    }

?>

