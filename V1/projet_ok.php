<?php 
include ('header.php'); 
require_once ('class.projet.php');
$budget_projet=$_POST["budget_projet"];
$nom_client=$_POST["nom_client"];
$prenom_client=$_POST["prenom_client"];
$situation_client=$_POST["situation_client"];
$revenu_client=$_POST["revenu_client"];
$duree_emprunt=$_POST["duree_emprunt"];
$type_offre=$_POST["type_offre"];
$user_id=$userRow["user_id"];
$projet=new projet (NULL,$budget_projet,$nom_client,$prenom_client,$situation_client,$revenu_client,$duree_emprunt,$type_offre,$user_id);
?>


test on fera du front mamène

<?php include ('footer.php'); ?>