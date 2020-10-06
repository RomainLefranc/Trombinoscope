<?php
/* 
M : Verifie s'il y a correspondance entre l'id et le mot de passe avec la BDD
O : retourne un booléen
I : l'identifiant et le mot de passe
*/
function verifUserExiste($id,$mdp) {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT IF((SELECT COUNT(*) FROM users WHERE log = :log AND pwd = :pwd ) > 0,TRUE, FALSE)'
    );
    $requete->execute(['log' => $id,"pwd" => $mdp]);
    $resultat = $requete->fetchall();
    return $resultat[0][0];
}

/* 
M : Recupere le nombre de news passé en parametre
O : retourne un array
I : le nombre de news qu'on veut
*/
function getNews($nb) {
    include "pdo.php";
    $requete = $pdo->prepare(
        'SELECT *
            FROM news 
            ORDER BY datNews DESC
            LIMIT :nb'
    );
    $requete->bindValue(':nb',$nb,PDO::PARAM_INT);
    $requete->execute();
    $resultat = $requete->fetchall();
    return $resultat;
}
/* 
M : Récupere le role de l'utilisateur une la connexion validé
O : retourne un entier
I : l'identifiant de l'utilisateur
*/
function getRoleUser($id) {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT rol 
            FROM users
            WHERE log = :log '
    );
    $requete->execute(['log' => $id]);
    $resultat = $requete->fetchall();
    return $resultat[0][0];
}
?>