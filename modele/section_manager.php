<?php

/* 
M : Recupere le nom de la section
O : retourne un string
I : le code de la section 
*/
function getNomSec($codSec) {
    include "data.php";
    $requete = $pdo->prepare('SELECT libSec FROM Sections WHERE codSec= :codSec');
    $requete->execute(["codSec" => $codSec]);
    $resultat = $requete->fetchall();
    return $resultat[0][0];
}

/* 
M : Récupere la liste de stagiaires dans une section
O : retourne un array
I : le code de la section 
*/
function getListeStagiaireSec($codSec) {
    include "data.php";
    $requete = $pdo->prepare('
        SELECT codSta,nomSta,preSta,interneSta 
            FROM Stagiaires 
            WHERE codSec = :codSec'
    );
    $requete->execute(["codSec" => $codSec]);
    $resultat = $requete->fetchall();
    return $resultat;
}

/* 
M : Verifie que la section existe dans la BDD
O : retourne un booléen ou non
I : /
*/
function verifSection() {
    include "data.php";
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