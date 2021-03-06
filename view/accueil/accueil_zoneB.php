<div class="col-md-4 mb-5">
    <?php
    if (isset($_SESSION["user"])) {
        $user = $_SESSION["user"];
        echo '
        
        <div class="d-flex justify-content-center">
            <div class="container">
                <h2>Bienvenue '.$user.'</h2>
                <hr>
                <a class="btn btn-primary d-block m-1" href="index.php?action=D" role="button">Se deconnecter</a>
                <a class="btn btn-primary d-block m-1" href="index.php?action=T" role="button">Trombinoscope</a>
            </div>
        </div>
        ';

    } else { ?>
    <form action="index.php?action=A" method="POST" class=" p-4 rounded bg-light">
        <div class="form-group">
            <h2>Connexion</h2>
            <label for="id">Adresse mail</label>
            <input type="text" class="form-control" id="id" name="login" aria-describedby="emailHelp" placeholder="Saisir adresse mail" required>
            <?php
            ?>
        </div>
        <div class="form-group">
            <label for="mdp">Mot de passe</label>
            <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe"  required>
            <?php
            if (isset($_POST["erreur"] )) {
                if ($_POST["erreur"] == 1) {
                    echo '<p class="text-danger mt-2">Mot de passe ou identifiant invalide</p>';
                }
            }
            ?>
        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>

    </form>
    <?php
    }
    ?>
    
    
</div>