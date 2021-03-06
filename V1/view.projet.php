<?php 
include ('header.php');
require_once ('class.projet.php');
?>
<div class="container">
	<legend><h1>Projets</h1></legend>

	<?php
	$listProjet=projet::getAllfromProjet($user_id);
	echo '<div class="container">';
	echo '<div class="col-md-offset-2 col-md-8 ">';
	echo '<table class="table table-bordered table-result">';
	echo '<tr><th>Nom</th><th>Budget</th><th>Type de Projet</th><th>Lien</th><th>Gestion</th></tr>';
	while ($ligne=$listProjet->fetch()) {
		echo "<tr>";
		echo "<td>".$ligne->nom_client." ".$ligne->prenom_client."</td>";
		echo "<td>".$ligne->budget_projet."</td>";
		echo "<td>".$ligne->type_projet."</td>";
		echo "<td><a href='view.resultat.php?id_projet=".$ligne->id_projet."''>Voir le projet</a></td>";
		echo "<td><a id=".$ligne->id_projet." class='clickable' href='#'>Supprimer le projet</a></td>";
		echo "</tr>";
	}
	echo "</table></div></div>";

	?>
</div>
<script type="text/javascript">
	$(".clickable").click(function(){
		clickableId=$(this).attr('id')
		$.ajax({
			url : 'supprimer_projet.php',
			type : 'get',
			data : {id: clickableId},
			success : $(this).parents('tr').remove()
		});

	});
</script>
<?php include ('footer.php'); ?>