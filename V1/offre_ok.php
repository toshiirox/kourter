<?php 
include ('header.php'); 
require_once ('class.offre.php');
$nom_agence=$_POST["nom_agence"];
$taux_offre=$_POST["taux_offre"];
$montant_mini=$_POST["montant_mini"];
$type_offre=$_POST["type_offre"];
$user_id=$userRow["user_id"];
$offre=new offre(NULL,$nom_agence,$taux_offre,$montant_mini,$type_offre,$user_id);
?>

<body>
	test on fera du front mamène
</body>
