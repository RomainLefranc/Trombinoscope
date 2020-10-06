<?php
function getListeStagiaireGestion() {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT codSta,nomSta,preSta,(SELECT DATE_FORMAT(datNaisSta,"%d/%m/%Y")) AS datNaisSta,codSec
            FROM Stagiaires '
    );
    $requete->execute();
    $resultat = $requete->fetchall();
    return $resultat;
}

?>