<?php
function Connexion() {
    include "pdo.php";
    $id = $_POST["login"];
    $mdp = $_POST["mdp"];
    $requete = $pdo->prepare('
        SELECT COUNT(*) 
            FROM users WHERE log ="'.$id.'" AND pwd ="'.$mdp.'"'
    );
    $requete->execute();
    $resultat = $requete->fetchall();
    return $resultat;
}
function getNews($nb) {
    include "pdo.php";
    $requete = $pdo->prepare('
        SELECT libNews 
            FROM news ORDER BY datNews ASC LIMIT '.$nb
    );
    $requete->execute();
    $resultat = $requete->fetchall();
    return $resultat;
}
?>