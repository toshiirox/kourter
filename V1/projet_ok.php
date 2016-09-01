<?php 
include ('header.php'); 
require_once ('class.projet.php');
$budget_projet=$_POST["budget_projet"];
$nom_client=$_POST["nom_client"];
$prenom_client=$_POST["prenom_client"];
$situation_client=$_POST["situation_client"];
$revenu_client=$_POST["revenu_client"];
$duree_emprunt=$_POST["duree_emprunt"];
$type_projet=$_POST["type_projet"];
$user_id=$userRow["user_id"];
$projet=new projet (NULL,$budget_projet,$nom_client,$prenom_client,$situation_client,$revenu_client,$duree_emprunt,$type_projet,$user_id);


echo '<div class="container">';
echo '<div class="panel panel-default">';
echo '<div class="panel-heading">Projet : '.$nom_client.'</div>';
echo '<div class="panel-body">Nom  : '.$nom_client.'</div>';
echo '<div class="panel-body">Prénom : '.$prenom_client.'</div>';
echo '<div class="panel-body">Situation : '.$situation_client.'</div>';
echo '<div class="panel-body">Revenu : '.$revenu_client.'</div>';
echo '<div class="panel-body">Budget : '.$budget_projet.'</div>';
echo '<div class="panel-body">Durée  : '.$duree_emprunt.'</div>';
echo '<div class="panel-body">Type : '.$type_projet.'</div>';

echo '</div>';



?>
<form class="form-horizontal">
	<fieldset>
		<div class="form-group">
			<div class="col-md-8">
				<a class="btn btn-success col-xs-3 col-xs-offset-4 " href="view.projet.php" role="button">Projets</a>
				<a class="btn btn-info col-xs-3 col-xs-offset-2 " href="projet.php" role="button">Nouveau Projet</a>
			</div>
		</div>

	</fieldset>
</form>	
</div>


<?php include ('footer.php'); ?>