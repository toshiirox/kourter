
<body>
	<?php 
	include ('header.php');
	require_once ('class.offre.php');

	$listOffre=offre::getAllfromOffre();

	echo '<div class="container">';
	echo '<div class="col-md-offset-2 col-md-8 ">';
	echo '<table class="table table-bordered">';
	echo '<tr><th>Agence</th><th>Taux</th><th>Montant Minimal</th><th>Type</th></tr>';
	while ($ligne=$listOffre->fetch()) {
		echo "<tr>";
		echo "<td>".$ligne->nom_agence."</td>";
		echo "<td>".$ligne->taux_offre."</td>";
		echo "<td>".$ligne->montant_mini."</td>";
		echo "<td>".$ligne->type_offre."</td>";

		echo "</tr>";
	}
	echo "</table></div></div>";

	?>
	<?php include ('footer.php'); ?>