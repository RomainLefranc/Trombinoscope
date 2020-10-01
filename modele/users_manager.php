<?php
function Connexion() {
    include "pdo.php";
    $id = $_POST["login"];
    $mdp = $_POST["mdp"];
    $requete = $pdo->prepare('SELECT COUNT(*) FROM users WHERE log ="'.$id.'" AND pwd ="'.$mdp.'"');
    $requete->execute();
    $resultat = $requete->fetchall();
    return $resultat;
}

?>