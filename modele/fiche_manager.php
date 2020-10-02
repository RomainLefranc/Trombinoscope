<?php

function getInfoSec($codSec) {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT libSec,(SELECT DATE_FORMAT(datDebSec,"%d/%m/%Y")),
            (SELECT COUNT(*) 
                FROM Stagiaires 
                WHERE Sections.codSec = Stagiaires.codSec) FROM Sections 
                    WHERE codSec = :codSec');
    $requete->execute(["codSec" => $codSec]);
    $resultat = $requete->fetchall();
    return $resultat;
}

function getInfoSta($codSta) {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT preSta,nomSta,datNaisSta,villeSta,interneSta,gsmSta,mailSta 
            FROM Stagiaires 
            WHERE codSta = :codSta'
    );
    $requete->execute(["codSta" => $codSta]);
    $resultat = $requete->fetchall();
    return $resultat;
}
function verifStagiaire() {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT IF((SELECT COUNT(*) FROM Stagiaires WHERE codSta = :codSta) > 0, TRUE, FALSE)'
    );
    $requete->execute(["codSta" => $codSta]);
    $resultat = $requete->fetchall();
    if ($resultat[0][0]) {
        return true;
    } else {
        header("location: index.php?action=T&erreur=3");
    }
}

?>