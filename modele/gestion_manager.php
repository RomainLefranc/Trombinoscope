<?php
/* 
M : Recupere la liste de tout les stagiaires
O : retourne un array
I : /
*/
function getListeStagiaireGestion() {
    include "data.php";
    $requete = $pdo->prepare('
        SELECT codSta,nomSta,preSta,(SELECT DATE_FORMAT(datNaisSta,"%d/%m/%Y")) AS datNaisSta,codSec
            FROM Stagiaires '
    );
    $requete->execute();
    $resultat = $requete->fetchall();
    return $resultat;
}

?>