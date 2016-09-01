  <?php include ('header.php'); ?>
  
  <div class="container">
    <legend><h1>Ajout de Projet</h1></legend>

    <div class="row marge-20">
    <div class= "title">
       <div class="col-md-4 col-md-offset-4">Informations Client</div>
     </div>

   </div>


   <form class="form-horizontal" method="POST" action="projet_ok.php">
    <fieldset>

      <!-- Form Name --> 



      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nom_client">Nom</label>  
        <div class="col-md-4">
          <input id="nom_client" name="nom_client" type="text" placeholder="Ex : Vauclert" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prenom_client">Prénom</label>  
        <div class="col-md-4">
          <input id="prenom_client" name="prenom_client" type="text" placeholder="Ex : Thomas" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="situation_client">Situation</label>
        <div class="col-md-4">
          <select id="situation_client" name="situation_client" class="form-control">
            <option value="celibataire">Célibataire</option>
            <option value="couple">En Couple</option>
            <option value="divorce">Divorcé(e)</option>
            <option value="veuf">Veuf/Veuve</option>
          </select>
        </div>
      </div>


      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="revenu_client">Revenu</label>  
        <div class="col-md-4">
          <input id="revenu_client" name="revenu_client" type="text" placeholder="Ex : 35 000" class="form-control input-md" required="">
          <span class="help-block">Revenu Annuel</span>  
        </div>
      </div>

</fieldset>
</form>



<div class="row marge-20">
    <div class= "title">
       <div class="col-md-4 col-md-offset-4">Informations Projet</div>
     </div>

   </div>

<form class="form-horizontal" method="POST" action="projet_ok.php">
    <fieldset>

      <!-- Form Name --> 



     <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="budget_projet">Budget</label>  
        <div class="col-md-4">
          <input id="budget" name="budget_projet" type="text" placeholder="Ex : 150 000" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="duree_emprunt">Durée d'emprunt</label>  
        <div class="col-md-4">
          <input id="duree_emprunt" name="duree_emprunt" type="text" placeholder="Ex : 20" class="form-control input-md" required="">
          <span class="help-block">Durée en année</span>  
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="type_offre">Type du projet</label>
        <div class="col-md-4">
          <select id="type_offre" name="type_offre" class="form-control">
            <option value="Immobilier">Immobilier</option>
            <option value="Automobile">Automobile</option>
            <option value="Etudiant">Étudiant</option>
          </select>
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="valid_offre"></label>
        <div class="col-md-4">
          <button id="valid_offre" name="valid_offre" class="col-xs-6 col-xs-offset-3 btn btn-valider">Ajouter un projet</button>
        </div>
      </div>

    </fieldset>
  </form>

</div>
<?php include ('footer.php'); ?>
