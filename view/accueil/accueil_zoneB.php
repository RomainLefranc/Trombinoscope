<div class="col-md-4 mb-5">
    <form action="index.php" method="POST" class=" p-4 rounded bg-light">
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
</div>