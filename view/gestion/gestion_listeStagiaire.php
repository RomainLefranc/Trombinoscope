<div class="container">
    <form action="index.php?action=L" class="form-inline" method="post">
        <label for="codSta"></label>
        <input class="form-control mb-2 mr-sm-2" type="text" id="codSta" placeholder="Code Stagiaire" required>
        <button type="submit" class="btn btn-primary mb-2">Ajouter un stagiaire</button>
    </form>
    <h3>Résultat de la recherche</h3>
    <div class="table-responsive-md">
        <table class="table table-hover text-center">
            <thead class="thead-dark">
                <th class="rounded-left border-0">Code Section</th>
                <th class="border-0">Code Stagiaire</th>
                <th class="border-0">Nom</th>
                <th class="border-0">Prénom</th>
                <th class="border-0">Date de naissance</th>
                <th class="border-0">Photo identité</th>
                <th class="rounded-right border-0">Action</th>
            </thead>
            <tbody>
                <?php
                echo $html;
                ?>
            </tbody>
        </table>
    </div>
</div>