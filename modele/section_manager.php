<?php
function getNomSec($codSec) {
    include "pdo.php";
    $requete = $pdo->prepare('SELECT libSec FROM Sections WHERE codSec="'.$codSec.'"');
    $requete->execute();
    $resultat = $requete->fetchall();
    return $resultat;
}
function getStagiaire($codSec) {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT codSta,nomSta,preSta,interneSta 
            FROM Stagiaires 
            WHERE codSec ="'.$codSec.'"'
    );
    $requete->execute();
    $resultat = $requete->fetchall();
    return $resultat;
}
?>