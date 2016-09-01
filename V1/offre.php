  <?php include ('header.php'); ?>
  <body>
  	<div class="container">

  		<form class="offre_form" method="POST" action="offre_ok.php">

  			<h1>Nouvelle Offre</h1>
  			<input type="text" name="nom_agence" placeholder="ex: Société Générale" required="required" />
  			<input type="text" name="taux_offre" placeholder="ex: 1.23" required="required" />
  			<input type="text" name="montant_mini" placeholder="ex: 250 000" required="required" />
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