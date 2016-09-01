<body>
	
	<?php 
	include ('header.php');
	require_once ('class.projet.php');
	require_once ('class.offre.php');
	$id_projet=$_GET['id_projet'];

			//#################################
		    //############LES PROJETS##########
			//#################################

	$leProjet=projet::getProjetbyID($id_projet);
	echo '<div class="container">';
	echo '<div class="col-md-offset-2 col-md-8">';
	echo '<table class="table table-bordered">';
	echo '<tr><th>Nom & Prénom</th><th>Budget</th><th>Situation</th><th>Revenu</th><th>Durée</th><th>Type</th></tr>';

	while ($ligne=$leProjet->fetch()) {
		echo '<tr>';
		echo '<td>'.$ligne->nom_client.' '.$ligne->prenom_client.'</td>';
		echo '<td>'.$ligne->budget_projet.'</td>';
		echo '<td>'.$ligne->situation_client.'</td>';
		echo '<td>'.$ligne->revenu_client.'</td>';
		echo '<td>'.$ligne->duree_emprunt.'</td>';
		echo '<td>'.$ligne->type_projet.'</td>';
		echo'</tr>';
		$typeProjet=$ligne->type_projet;
	}
	echo '</table></div></div>';

			//#################################
		    //#############LES OFFRES##########
			//#################################

	$lesOffres=offre::getOffreByType($typeProjet);
	while ($ligne=$lesOffres->fetch()){
		echo $ligne->id_offre;
		echo $ligne->type_offre;

	}
	
	?>
</body>
</html>

