<?php
function getNomSec($codSec) {
    include "pdo.php";
    $requete = $pdo->prepare('SELECT libSec FROM Sections WHERE codSec= :codSec');
    $requete->execute(["codSec" => $codSec]);
    $resultat = $requete->fetchall();
    return $resultat[0][0];
}
function getListeStagiaireSec($codSec) {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT codSta,nomSta,preSta,interneSta 
            FROM Stagiaires 
            WHERE codSec = :codSec'
    );
    $requete->execute(["codSec" => $codSec]);
    $resultat = $requete->fetchall();
    return $resultat;
}
function verifSection() {
    include "pdo.php";
    $requete = $pdo->prepare('SELECT IF((SELECT COUNT(*) FROM Sections WHERE codSec = :codSec) > 0, TRUE, FALSE)');
    $requete->execute(["codSec" => $_GET["section"]]);
    $resultat = $requete->fetchall();
    if ($resultat[0][0]) {
        return true;
    } else {
        header("location: index.php?action=T&erreur=2");
    }
}
?>