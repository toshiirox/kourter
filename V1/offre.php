  <?php include ('header.php'); ?>
  <div class="container">
    <legend><h1>Ajout d'Offre</h1></legend>

    <form class="form-horizontal" method="POST" action="offre_ok.php">
      <fieldset>

       <!-- Form Name -->

       <!-- Text input-->
       <div class="form-group">
        <label class="col-md-4 control-label" for="nom_agence">Agence</label>  
        <div class="col-md-4">
         <input id="nom_agence" name="nom_agence" type="text" placeholder="Ex : Société Générale" class="form-control input-md" required="">

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
    <option value="Immobilier">Immobilier</option>
    <option value="Automobile">Automobile</option>
    <option value="Etudiant">Etudiant</option>
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
