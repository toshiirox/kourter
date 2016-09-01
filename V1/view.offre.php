
<body>
	<?php 
	include ('header.php');
	require_once ('class.offre.php');

	$listOffre=offre::getAllfromOffre();

	while ($ligne=$listOffre->fetch()) {
		echo $ligne->nom_agence;
	}

	?>
</body>
</html>