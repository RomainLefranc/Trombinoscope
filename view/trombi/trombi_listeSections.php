<div class="container">
  <?php
    if (isset($_GET["erreur"])) {
      if ($_GET["erreur"] == 1) {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Erreur!</strong> Section ou stagiaire invalide
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      } elseif ($_GET["erreur"] == 2) {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Erreur!</strong> Initiale invalide
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      } elseif ($_GET["erreur"] == 3) {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Erreur!</strong> Section invalide
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }
    }
  ?>
  <h3>Liste des sections</h3>
  <table class="table table-hover text-center">
    <thead class="thead-dark ">
      <th class="rounded-left border-0">Code</th>
      <th class="border-0">Nom</th>
      <th class="border-0">Date de debut formation</th>
      <th class="border-0">Nombre de stagiaires</th>
      <th class="border-0">Icone</th>
      <th class="rounded-right border-0">Action</th>
    </thead>
    <tbody>
      <?php
      echo $donnee;
      ?>
    </tbody>
  </table>
</div>