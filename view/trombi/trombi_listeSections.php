
<?php
  if (isset($_GET["erreur"])) {
    if ($_GET["erreur"] == 3) {
      $msgErreur = "Stagiaire";
    } elseif ($_GET["erreur"] == 1) {
      $msgErreur = "Initiale";
    } elseif ($_GET["erreur"] == 2) {
      $msgErreur = "Section";
    }
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Erreur!</strong> '.$msgErreur.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
?>
<h3>Liste des sections</h3>
<div class="table-responsive-md">
  <table class="table table-hover text-center">
    <thead class="thead-dark ">
      <th class="rounded-left border-0 align-middle">Code</th>
      <th class="border-0 align-middle">Nom</th>
      <th class="border-0 align-middle" >Date de debut formation</th>
      <th class="border-0 align-middle">Nombre de stagiaires</th>
      <th class="border-0 align-middle">Icone</th>
      <th class="rounded-right border-0 align-middle">Action</th>
    </thead>
    <tbody>
      <?php
      echo $html;
      ?>
    </tbody>
  </table>
</div>
