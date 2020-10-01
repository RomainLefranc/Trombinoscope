<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=trombi;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die('Erreur : '.$e->getMessage());
    }

    /*  Accueil Trombi

            SELECT LEFT(NomSta,1),COUNT(*) 
                FROM tableStagiaires
            GROUP BY LEFT(NomSta,1)
            ORDER BY LEFT(NomSta,1) ASC

            SELECT *
                FROM tableSections
            ORDER BY codeSection ASC

        Choix 1 initiale
            
            SELECT codSec, codSta, nomSta, preSta, interneSta
                FROM tableStagiaires
                    WHERE LEFT(nomSta,1) = $variable    
            ORDER BY nomSta,preSta ASC

        Clic sur 1 stagiaire

            SELECT *
                FROM tableStagiaires
                WHERE codSec = $_GET['section'] AND codSta = $_GET['stagiaire']

        Choix 1 section

        SELECT * 
            FROM tableStagiaires
            WHERE codSec = $_GET['section']
        ORDER BY nomSta ASC
    */



?>