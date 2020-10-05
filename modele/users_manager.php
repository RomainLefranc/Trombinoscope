<?php
function Connexion() {
    include "pdo.php";
    $id = $_POST["login"];
    $mdp = $_POST["mdp"];
    $requete = $pdo->prepare('
        SELECT IF((SELECT COUNT(*) FROM users WHERE log = :log AND pwd = :pwd ) > 0,TRUE, FALSE)'
    );
    $requete->execute(['log' => $id,"pwd" => $mdp]);
    $resultat = $requete->fetchall();
    return $resultat;
}
function getNews($nb) {

    include "pdo.php";
    $requete = $pdo->prepare(
        'SELECT libNews 
            FROM news 
            ORDER BY datNews ASC
            LIMIT :nb'
    );
    $requete->bindValue(':nb',$nb,PDO::PARAM_INT);
    $requete->execute();
    $resultat = $requete->fetchall();
    return $resultat;
}
?>