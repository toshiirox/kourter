<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Kourter : Connexion</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="style.css" type="text/css"  />

</head>
<body>

 <!-- NAV -->
  <?php include('header.php'); ?>

<div class="container">

	<form class="offre_form" method="post">

		
		<h1>Créer une Offre</h1>
		<br />
		<h2>Informations Partenaire</h2>
		<br />
			<label for="banque">Nom de l'Établissement Bancaire</label>
			<input type="text" name="Banque" placeholder="ex: Société Générale" required="required" />
			<br/>
			<label for="agence">Agence</label>
			<input type="text" name="Agence" placeholder="ex: Angers - Fulton" required="required" />
			<br />
			<label for="adress">Adresse</label>
			<input type="text" name="Adresse" required="required" />
			<br />
			<label for=codepostal>Code postal</label>
			<input id=codepostal name=codepostal type=text required />
			<br />
			<br />
			<br />
		<h2>Détails de l'Offre</h2>
		<br />
			<label for="tauxinteret">Taux d'Intérêts  %</label>
			<input id="tauxint" type="number" step="0.01" value="1.00" max="3.00" min="1.00" />
			
			<label for="annees"> Années d'endettement</label>
			<input id="yendettement" type="number" step="5" value="" min="0" max="30" placeholder="max: 30ans" />
			

			<br />
			<label for="typeprojet">Type de Projet</label><br />
			<div class="selectform1">
				<select name="typelist" form="typeform">
				<option value="immobilier">Crédit Immobilier</option>
				<option value="auto">Crédit Auto</option>
				<option value="consommation">Crédit à la Consommation</option>
				<option value="etudiant">Crédit Étudiant</option>

			</select>
			</div>
			<br />


			<button type="submit" class="btn-valider btn btn-pimary btn-block ">Valider</button>
			<br />
			<button type="submit" class="btn-valider-creer btn btn-primary btn-block ">Valider & Créer une nouvelle offre</button>
			<div class="annuler">ou <a href="../V1/home.php">Annuler</a></div>
		</form>
	</div>
</div>
</div>
</div>
</body>
</html>