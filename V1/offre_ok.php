<?php 
include ('header.php'); 
require_once ('class.offre.php');
$nom_agence=$_POST["nom_agence"];
$taux_offre=$_POST["taux_offre"];
$montant_mini=$_POST["montant_mini"];
$type_offre=$_POST["type_offre"];
$user_id=$userRow["user_id"];
$offre=new offre(NULL,$nom_agence,$taux_offre,$montant_mini,$type_offre,$user_id);


echo '<div class="container">';
echo '<div class="panel panel-default">';
echo '<div class="panel-heading">Agence : '.$nom_agence.'</div>';
echo '<div class="panel-body">Agence : '.$nom_agence.'</div>';
echo '<div class="panel-body">Taux  : '.$taux_offre.'</div>';
echo '<div class="panel-body">Montant Minimum : '.$montant_mini.'</div>';
echo '<div class="panel-body">Type de l\'offre : '.$type_offre.'</div>';


echo '</div>';



?>
<form class="form-horizontal">
	<fieldset>
		<div class="form-group">
			<div class="col-md-8">
				<a class="btn btn-success col-xs-3 col-xs-offset-4 " href="view.offre.php" role="button">Offres</a>
				<a class="btn btn-info col-xs-3 col-xs-offset-2 " href="offre.php" role="button">Nouvelle Offre</a>
			</div>
		</div>

	</fieldset>
</form>	
</div>


<?php include ('footer.php');  ?>