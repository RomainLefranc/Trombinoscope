<div class="container ">
    <H2>Info Sections</H2>
<!--     <div class="col-9">
        <div class="col">
            <div class="form-group">
                <label for="codeSection">Code </label>
                <input type="text" class="form-control" id="codeSection"  value="<?php echo $codSec ?>"disabled>
            </div>
            <div class="form-group">
                <label for="libelleSection">Libellé </label>
                <input type="text" class="form-control"  id="libelleSection"  value="<?php echo $nomSection ?>"disabled>
            </div>
        </div>
        <div class="col">
            <div class="form-group ">
                <label for="dateDebut">Date debut formation </label>
                <input type="text" class="form-control"  id="dateDebut"  value="<?php echo $dateDebut ?>"disabled>
            </div>
            <div class="form-group ">
                <label for="nbSta">Nombre de stagiaire </label>
                <input type="text" class="form-control"  id="nbSta"  value="<?php echo $nbSta ?>"disabled>
            </div>
        </div>
    </div>
    <div class="col-3 d-flex justify-content-center align-items-center">
            <div class="">
                <?php
                    echo '<img class="img-fluid" src="https://via.placeholder.com/200x200.png?text='.$nomSection.'" alt="">'
                ?>
            </div>
        </div> -->

    <div class="row">
        <div class="col-9 d-flex">
            <div class="flex-fill pr-2">
                <div class="form-group ">
                    <label for="dateDebut">Date debut formation </label>
                    <input type="text" class="form-control"  id="dateDebut"  value="<?php echo $dateDebut ?>"disabled>
                </div>
                <div class="form-group ">
                    <label for="nbSta">Nombre de stagiaire </label>
                    <input type="text" class="form-control"  id="nbSta"  value="<?php echo $nbSta ?>"disabled>
                </div>
            </div>
            <div class="flex-fill ">
                <div class="form-group ">
                    <label for="codeSection">Code </label>
                    <input type="text" class="form-control" id="codeSection"  value="<?php echo $codSec ?>"disabled>
                </div>
                <div class="form-group ">
                    <label for="libelleSection">Libellé </label>
                    <input type="text" class="form-control"  id="libelleSection"  value="<?php echo $nomSection ?>"disabled>
                </div>
            </div>
        </div>
        <div class="col-3 d-flex justify-content-center align-items-center">
            <div class="">
                <?php
                    echo '<img class="img-fluid" src="media/sections/sect'.$codSec.'.png" alt="">'
                ?>
            </div>
        </div>
    </div>
    <H2>Info Stagiaire</H2>
    <div class="row">
        <div class="col-9">
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
                <div class="form-group col-md-1">
                    <label for="interne">Interne</label>
                    <input type="text" class="form-control" id="interne" value="<?php echo $interne?>"  disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="tel">Téléphone</label>
                    <input type="text" class="form-control" id="tel"disabled value="<?php echo $telephone ?>">
                </div>
                <div class="form-group col-md-7">
                    <label for="mail">Mail</label>
                    <input type="text" class="form-control" id="mail" value="<?php echo $mail ?>" disabled>
                </div>
            </div>
        </div>
        <div class="col-3 d-flex  justify-content-center align-items-center">
            <div class="">
                <?php
                    echo '<img class="img-fluid w-100" src="media/stagiaires/sect'.$codSec.'_'.$codSta.'.png" alt="">'
                ?>
            </div>
        </div>
    </div>


</div>