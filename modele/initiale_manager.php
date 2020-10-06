<?php
/* 
M : Recupere la liste de stagiaire ayant comme initiale la variable $initiale passé en parametre
O : retourne un array
I : intiale a rechercher 
*/
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

/* 
M : verifie que l'initiale renvoie au moins 1 reponse de la BDD
O : retourne un booléen ou pas
I : / 
*/
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