<?php
function getStagiaire() {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT libSec,codSta,nomSta,preSta,(SELECT DATE_FORMAT(datNaisSta,"%d/%m/%Y")),Stagiaires.codSec 
            FROM Stagiaires INNER JOIN Sections ON Stagiaires.codSec = Sections.codSec'
    );
    $requete->execute();
    $resultat = $requete->fetchall();
    return $resultat;
}

?>