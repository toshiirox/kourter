<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Kourter : Créer un projet</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="style.css" type="text/css"  />

</head>

<body>

	<!-- NAV -->
	<?php include('header.php'); ?>


	<div class="container">

		<form class="projet_form" method="post">


			<h1>Créer une Offre</h1>
			<h2>Informations Client</h2>
			<label for="banque">Nom</label>
			<input type="text" name="Banque" required="required" />
			<label for="agence">Prénom</label>
			<input type="text" name="Agence" required="required" />
			<label for="agence">Date de Naissance</label>
			<input type="date" name="Agence" required="required" />
			<label for="agence">Situation Familiale</label>
			<div class="selectform1">
				<select name="belist" form="typeform" required="required">
					<option disabled selected value> --</option>
					<option value="marie">Marié(e) / Pacsés</option>
					<option value="celibataire">Célibataire</option>
					<option value="veuf">Veuf / Veuve</option>
					<option value="concubinage">Concubinage</option>
				</select>
			</div>
			<label for="enfants">Enfants</label>
			<div class="selectform1">
				<select name="childlist" form="typeform" id="childlist">
					<option disabled selected value>--</option>
					<option value="oui">OUI </option>
					<option value="non">NON</option>


				</select>
			</div>
			<label for="adress">Adresse</label>
			<input type="text" name="Adresse" required="required" />
			<label for=codepostal>Code postal</label>
			<input id=codepostal name=codepostal type=text maxlength="5" />
			<h2>Détails de l'Offre</h2>
			<label for="tauxinteret">Taux d'Intérêts  %</label>
			<input id="tauxint" type="number" step="0.01" value="1.00" max="3.00" min="1.00" />
			
			<label for="annees"> Années d'endettement</label>
			<input id="yendettement" type="number" step="5" value="" min="0" max="30" placeholder="max: 30ans" />
			

			<label for="typeprojet">Type de Projet</la
				<div class="selectform1">
					<select name="typelist" form="typeform">
						<option value="immobilier">Crédit Immobilier</option>
						<option value="auto">Crédit Auto</option>
						<option value="consommation">Crédit à la Consommation</option>
						<option value="etudiant">Crédit Étudiant</option>

					</select>
				</div>


				<button type="submit" class="btn-valider btn btn-block ">Valider</button>

				<div class="annuler">ou <a href="../V1/home.php">Annuler</a></div>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>