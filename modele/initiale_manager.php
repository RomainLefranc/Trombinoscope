<?php
function getListeStagiaireInitiale($initiale) {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT codSec,codSta,nomSta,preSta,(SELECT DATE_FORMAT(datNaisSta,"%d/%m/%Y")) AS dateNaisSta
            FROM Stagiaires 
            WHERE LEFT(NomSta,1) = :initiale'
    );
    $requete->execute(["initiale" => $initiale]);
    $resultat = $requete->fetchall();
    return $resultat;
}
function verifInitiale() {
    $initiale = $_GET["initiale"];
    include "pdo.php";
    $requete = $pdo->prepare('SELECT IF((SELECT COUNT(*) FROM Stagiaires WHERE LEFT(NomSta,1) = :initiale) > 0, TRUE, FALSE)'
    );
    $requete->execute(["initiale" => $initiale]);
    $resultat = $requete->fetchall();
    if ($resultat[0][0]) {
        return true;
    } else {
        header("location: index.php?action=T&erreur=1");
    }
}
?>