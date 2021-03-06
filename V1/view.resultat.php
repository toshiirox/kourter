	<?php 
	include ('header.php');
	require_once ('class.projet.php');
	require_once ('class.offre.php');

	?>
	<div class="container">
		<legend><h1>Récapitulatif projet</h1></legend>

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
		?>
		<legend><h1>Offres disponibles et estimations</h1></legend>
		<?php
		$lesOffres=offre::getOffreByType($typeProjet, $user_id,$budgetProjet);
		echo '<div class="container">';
		echo '<div class="col-md-offset-2 col-md-8">';
		echo '<table class="table table-bordered table-result">';
		echo '<tr><th>Agence</th><th>Taux</th><th>Mensualité</th><th>Intérêt</th><th>Coût de l\'emprunt</th><th>Coût à l\'année</th></tr>';
		while ($ligne2=$lesOffres->fetch()) {
			$nom_agence=$ligne2->nom_agence;
			$id_offre=$ligne2->id_offre;
			$taux_offre=$ligne2->taux_offre;
			$montant_mini=$ligne2->montant_mini;
			$mensualite=(($budgetProjet*($taux_offre/100+1)) / $dureeEmprunt) / 12;
			$mensualite=round($mensualite,2);
			$interet=($budgetProjet*($taux_offre/100));
			$cout_total=$budgetProjet + $interet;
			$cout_annee=$cout_total / $dureeEmprunt;
			$cout_annee=round($cout_annee,2);
			echo "<tr>";
			echo "<td>".$nom_agence."</td>";
			echo "<td>".$taux_offre."</td>";
			echo "<td>".$mensualite." €</td>";
			echo "<td>".$interet." €</td>";
			echo "<td>".$cout_total." €</td>";
			echo "<td>".$cout_annee." €</td>";
			echo "<tr>";
		}
		
		?>
	</div>
	<?php include ('footer.php'); ?>

