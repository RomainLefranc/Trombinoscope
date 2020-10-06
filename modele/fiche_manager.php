<?php
/* 
M : Recupere des informations sur une section
O : retourne un array
I : le code de la section
*/
function getInfoSec($codSec) {
    include "data.php";
    $requete = $pdo->prepare('
        SELECT libSec,(SELECT DATE_FORMAT(datDebSec,"%d/%m/%Y")) AS datDebSec,
            (SELECT COUNT(*) 
                FROM Stagiaires 
                WHERE Sections.codSec = Stagiaires.codSec) AS cptSta 
            FROM Sections 
            WHERE codSec = :codSec');
    $requete->execute(["codSec" => $codSec]);
    $resultat = $requete->fetchall();
    return $resultat[0];
}

/* 
M : Recupere des informations sur un stagiaire
O : retourne un array
I : le code du stagiaire et le code de la section du stagiaire
*/
function getInfoSta($codSta,$codSec) {
    include "data.php";
    $requete = $pdo->prepare('
        SELECT preSta,nomSta,(SELECT DATE_FORMAT(datNaisSta,"%d/%m/%Y")) AS datNaisSta,villeSta,interneSta,gsmSta,mailSta 
            FROM Stagiaires 
            WHERE codSta = :codSta AND codSec = :codSec'
    );
    $requete->execute(["codSta" => $codSta, "codSec" => $codSec]);
    $resultat = $requete->fetchall();
    return $resultat[0];
}


/* 
M : verifie que le stagiaire existe dans la BDD
O : retourne un booléen ou pas
I : /
*/
function verifStagiaire() {
    $codSta = $_GET["stagiaire"];
    $codSec = $_GET["section"];
    include "data.php";
    $requete = $pdo->prepare('SELECT IF((SELECT COUNT(*) FROM Stagiaires WHERE codSta = :codSta AND codSec = :codSec) > 0, TRUE, FALSE)'
    );
    $requete->execute(["codSta" => $codSta, "codSec" => $codSec]);
    $resultat = $requete->fetchall();
    if ($resultat[0][0]) {
        return true;
    } else {
        header("location: index.php?action=T&erreur=3");
    }
}

?>