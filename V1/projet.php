  <?php include ('header.php'); ?>
  <body>
  	<div class="container">

  		<form class="offre_form" method="POST" action="projet_ok.php">

  			<h1>Nouveau projet</h1>
  			<input type="text" name="budget_projet" placeholder="budget" required="required" />
  			<input type="text" name="nom_client" placeholder="nom" required="required" />
  			<input type="text" name="prenom_client" placeholder="prenom" required="required" />
        <input type="text" name="situation_client" placeholder="situation_client" required="required" />
        <input type="text" name="revenu_client" placeholder="revenu_client" required="required" />
        <input type="text" name="duree_emprunt" placeholder="duree_emprunt" required="required" />
        <select name="type_offre" id="type_offre" class="selectform1">
          <option value="immo">Immobilier</option>
          <option value="auto">Automobile</option>
          <option value="etudiant">Etudiant</option>
        </select>
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
      </form>
    </div>
  </body>
  </html>