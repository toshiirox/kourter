  <?php include ('header.php'); ?>
  <div class="container">

    <form class="form-horizontal" method="POST" action="offre_ok.php">
      <fieldset>

        <!-- Form Name -->
        <legend><h1>Ajout d'offre</h1></legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="nom_agenace">Agence</label>  
          <div class="col-md-4">
            <input id="nom_agenace" name="nom_agenace" type="text" placeholder="Ex : Société Générale" class="form-control input-md" required="">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="taux_offre">Taux</label>  
          <div class="col-md-4">
            <input id="taux_offre" name="taux_offre" type="text" placeholder="Ex : 1.23" class="form-control input-md" required="">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="montant_mini">Montant Minimum</label>  
          <div class="col-md-4">
            <input id="montant_mini" name="montant_mini" type="text" placeholder="Ex : 150 000" class="form-control input-md" required="">

          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="type_offre">Type du projet</label>
          <div class="col-md-4">
            <select id="type_offre" name="type_offre" class="form-control">
              <option value="immo">Immobilier</option>
              <option value="auto">Automobile</option>
              <option value="etudiant">Étudiant</option>
            </select>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="valid_offre"></label>
          <div class="col-md-4">
            <button id="valid_offre" name="valid_offre" class="col-xs-6 col-xs-offset-3 btn btn-success">Ajouter une offre</button>
          </div>
        </div>

      </fieldset>
    </form>

  </div>
  <?php include ('footer.php'); ?>
