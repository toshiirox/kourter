<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Kourter : Créer une offre</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="style.css" type="text/css"  />

</head>
<body>

	<!-- NAV -->
	<?php include('header.php'); ?>

	<section class="container">

		<!-- <form class="template_form" method="post">


			<h1>Créer une Offre</h1>

			<h2>Informations Partenaire</h2>

			<!-- <label for="banque">Nom de l'Établissement Bancaire</label>
			<input type="text" name="Banque" placeholder="ex: Société Générale" required="required" /> 
			
			<label for="agence">Agence</label>
			<input type="text" name="Agence" placeholder="ex: Angers - Fulton" required="required" />
			
			<label for="adress">Adresse</label>
			<input type="text" name="Adresse" required="required" />
			
			<label for=codepostal>Code postal</label>
			<input id=codepostal name=codepostal type=text required />
			
			
			
			<h2>Détails de l'Offre</h2>

			<label for="tauxinteret">Taux d'Intérêts  %</label>
			<input id="tauxint" type="number" step="0.01" value="1.00" max="3.00" min="1.00" />
			
			<label for="typeprojet">Type de Projet</label>
			<div class="selectform1">
				<select name="typelist" form="typeform">
					<option value="immobilier">Crédit Immobilier</option>
					<option value="auto">Crédit Auto</option>
					<option value="consommation">Crédit à la Consommation</option>
					<option value="etudiant">Crédit Étudiant</option>

				</select>
			</div> -->
			
			<form class="form-horizontal template_form">
				<fieldset>

					<!-- Form Name -->
					<h1>Créer une Offre</h1>

					<h2>Informations Partenaire</h2>	
					<!-- Text input-->
					<div class="form-group">

						<label class="control-label" for="nom_agence">Nom de l'Agence</label>  
						
							<input id="nom_agence" name="nom_agence" type="text" placeholder="ex: Société Générale - Fulton" class="form-control" required>

						
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-8 col-md-offset-2" for="taux_offre">Taux d'Intérêts</label>  
						<div class="col-md-8 col-md-offset-2">
							<input id="taux_offre" name="taux_offre" type="number" step="0.01" value="1.00" max="3.00" min="1.00" placeholder="" class="form-control input-md" required="">
						</div>
					</div>

					<!-- Select Basic -->
					<h2>Détails de l'Offre</h2>
					<div class="form-group">
						<label class="col-md-4 control-label" for="type_offre">Type d'Offre</label>
						<div class="col-md-4">
							<select id="type_offre" name="type_offre" class="form-control">
								<option value="1">Crédit Immobilier</option>
								<option value="2">Crédit Auto</option>
								<option value="3">Crédit à la Consommation</option>
								<option value="4">Crédit Étudiant</option>
							</select>
						</div>
					</div>

				</fieldset>
			</form>



			<button type="submit" class="btn-valider btn btn-block ">Valider</button>
			

			<div class="annuler">ou <a href="../V1/home.php">Annuler</a></div>
		</form>
	</section>


</div>
</div>
</div>
</body>
</html>