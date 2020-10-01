<?php

function getInfoSec($codSec) {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT libSec,(SELECT DATE_FORMAT(datDebSec,"%d/%m/%Y")),
            (SELECT COUNT(*) 
                FROM Stagiaires 
                WHERE Sections.codSec = Stagiaires.codSec) FROM Sections 
                    WHERE codSec ="'.$codSec.'"');
    $requete->execute();
    $resultat = $requete->fetchall();
    return $resultat;
}

function getInfoSta($codSta) {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT preSta,nomSta,datNaisSta,villeSta,interneSta,gsmSta,mailSta 
            FROM Stagiaires 
            WHERE codSta ="'.$codSta.'"'
    );
    $requete->execute();
    $resultat = $requete->fetchall();
    return $resultat;}

?>