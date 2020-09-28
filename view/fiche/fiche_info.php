<div class="container ">
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" n id="nom"  value="<?php echo $nomStagiaire ?>"disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="prenom">Prénom</label>
      <input type="text" class="form-control" id="prenom" value="<?php echo $prenomStagiaire ?>" disabled>
    </div>
  </div>
  <div class="form-group">
    <label for="dateNaiss">Date de naisssance</label>
    <input type="text" class="form-control" id="dateNaiss" value="<?php echo $dateNaiss ?>" disabled>
  </div>
  <div class="form-group">
    <label for="ville">Ville</label>
    <input type="text" class="form-control" id="ville" value="<?php echo $villeSta?>" disabled>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="interne">Interne</label>
      <input type="text" class="form-control" id="interne" value="<?php echo $interne?>"  disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="tel">Téléphone</label>
      <input type="text" class="form-control" id="tel"disabled value="<?php echo $telephone ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="mail">Mail</label>
      <input type="text" class="form-control" id="mail" value="<?php echo $mail ?>" disabled>
    </div>
  </div>

</div>