<?php 
include ('header.php');
require_once ('class.projet.php');

$listProjet=projet::getAllfromProjet();

echo '<div class="container">';
echo '<div class="col-md-offset-2 col-md-8 ">';
echo '<table class="table table-bordered">';
echo '<tr><th>Nom</th><th>Budget</th><th>Type de Projet</th><th>lien</th></tr>';
while ($ligne=$listProjet->fetch()) {
	echo "<tr>";
	echo "<td>".$ligne->nom_client." ".$ligne->prenom_client."</td>";
	echo "<td>".$ligne->budget_projet."</td>";
	echo "<td>".$ligne->type_projet."</td>";
	echo "<td><a href=view.resultat.php?id_projet=".$ligne->id_projet.">Voir le projet</a></td>";
	echo "</tr>";
}
echo "</table></div></div>";

?>
</html>