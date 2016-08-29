<?php 
include('connexion.php');
include('banque.class.php');
$projet=200000;
$duree=20;
$listeBank=Banque::getAllBanks();
$i=1;
/*echo "<form><select name='duree'>";
while ( $i <= 30) {
	echo "<option>".$i."</option>";
	$i++;
}*/

echo "</select></form>";

while ($ligne=$listeBank->fetch()) {
			echo "Nom de la banque : ".$ligne->Nom.", Taux : ".$ligne->Taux."%, Derniere MAJ : ".$ligne->Date_modif." <br>";
			$to=$ligne->Taux;
			$budget=$to*$projet;
			$interet=$budget-$projet;
			echo "le budget est de ".$budget."<br>";
			$montantAn=$budget/$duree;
			$montantMois=round($montantAn/12,2);

			echo "le montant par an pour une duree de ".$duree."ans est de ".$montantAn."e et le montant par mois est de ".$montantMois."e. Les interet sont de ".$interet."<br><br>";
		}
?>