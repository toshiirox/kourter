	<?php 
	include ('header.php');
	require_once ('class.projet.php');
	require_once ('class.offre.php');

	?>
	<div class="container">
		<legend><h1>Projet et estimations</h1></legend>

		<?php
		$id_projet=$_GET['id_projet'];

			//#################################
		    //############LES PROJETS##########
			//#################################
		$leProjet=projet::getProjetbyID($id_projet, $user_id);
		echo '<div class="container">';
		echo '<div class="col-md-offset-2 col-md-8">';
		echo '<table class="table table-bordered table-result">';
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
			$budgetProjet=$ligne->budget_projet;
			$dureeEmprunt=$ligne->duree_emprunt;
		}
		echo '</table></div></div>';

			//#################################
		    //#############LES OFFRES##########
			//#################################

		$lesOffres=offre::getOffreByType($typeProjet, $user_id);
		while ($ligne=$lesOffres->fetch()){
			$id_offre=$ligne->id_offre;
			$type_offre=$ligne->type_offre;
			$taux_offre=$ligne->taux_offre;
			$montant_mini=$ligne->montant_mini;
			$mensualité=$budgetProjet*$taux_offre/$dureeEmprunt/12;

		}
		
		?>
	</div>
	<?php include ('footer.php'); ?>

