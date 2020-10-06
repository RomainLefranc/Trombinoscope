<?php
/* 
M : Récupere la liste des sections
O : retourne un array
I : /
*/
function getListeSecTrombi() {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT codSec,libSec,
            (SELECT DATE_FORMAT(datDebSec,"%d/%m/%Y")) AS datDebSec, 
            (SELECT COUNT(*) 
                FROM Stagiaires 
                WHERE Sections.codSec = Stagiaires.codSec) AS cptSta 
            FROM Sections
            ORDER BY (SELECT COUNT(*) 
            FROM Stagiaires 
            WHERE Sections.codSec = Stagiaires.codSec) DESC, libSec '     
    );
    $requete->execute();
    $resultat = $requete->fetchall();
    return $resultat;
}

/* 
M : Compte dans la base de données le nombre de Stagiaires ayant comme initiale de leur prenom la variable $initiale passsé en parametre
O : retourne un int
I : l'initiale a rechercher
*/
function getNbInitiale($initiale) {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT COUNT(*) 
            FROM Stagiaires 
            WHERE LEFT(NomSta,1) = :initiale'
    );
    $requete->execute(["initiale" => $initiale]);
    $resultat = $requete->fetchall();
    return $resultat[0][0];
}
?>