<body>
	
	<?php 
	include ('header.php');
	require_once ('class.projet.php');

	$listProjet=projet::getAllfromProjet();

	while ($ligne=$listProjet->fetch()) {
		echo $ligne->nom_client;
	}

	?>
</body>
</html>