
<body>
	<?php 
	include ('header.php');
	require_once ('class.offre.php');
	?>
	<div class="container">
		<legend><h1>Offres</h1></legend>

		<?php
		$listOffre=offre::getAllfromOffre($user_id);

		echo '<div class="container">';
		echo '<div class="col-md-offset-2 col-md-8 ">';
		echo '<table class="table table-bordered table-result">';
		echo '<tr><th>Agence</th><th>Taux</th><th>Montant Minimal</th><th>Type</th><th>Gestion</th></tr>';
		while ($ligne=$listOffre->fetch()) {
			echo "<tr>";
			echo "<td>".$ligne->nom_agence."</td>";
			echo "<td>".$ligne->taux_offre."</td>";
			echo "<td>".$ligne->montant_mini."</td>";
			echo "<td>".$ligne->type_offre."</td>";
			echo "<td><a id=".$ligne->id_offre." class='clickable' href='#'>Supprimer l'offre</a></td>";

			echo "</tr>";
		}
		echo "</table></div></div>";

		?>
	</div>
	<script type="text/javascript">
		$(".clickable").click(function(){
			clickableId=$(this).attr('id')
			$.ajax({
				url : 'supprimer_offre.php',
				type : 'get',
				data : {id: clickableId},
				success : $(this).parents('tr').remove()
			});

		});
	</script>
	<?php include ('footer.php'); ?>