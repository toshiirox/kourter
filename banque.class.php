<?php 
include("connexion.php");

class Banque {
	public $Nom;
	public $Taux;
	public $Date_modif;
	public $ID;

	public function __construct($id_banque){
		global $connexion;
		$stmt=$connexion->prepare("SELECT * FROM Banque WHERE ID = :id");
		$stmt->bindValue(":id", $id_banque);
		$stmt->execute();
		$bank=$stmt->fetchObject();
		$this->ID=$bank->ID;
		$this->Nom=$bank->Nom;
		$this->Taux=$bank->Taux;
		$this->Date_modif=$bank->Date_modif;
	}

	public static function getAllBanks(){
		global $connexion;
		$req=$connexion->query("SELECT * FROM Banque");
		$req->setFetchMode(PDO::FETCH_OBJ);
		return $req;
	}

	public static function getTauxById($ID_banque){
		global $connexion;
		$req=$connexion->prepare("SELECT Taux From Banque WHERE ID=:id");
		$req->bindValue(":id",$ID_banque);
		$Taux1=$req->fetchObject();
		return $Taux1;

	}
	public function Text(){
		echo $this->Nom." ".$this->Taux;
	}
}

/*$bank1=new Banque('1');*/
/*$bank1->Text();*/
/*$listeBank=Banque::getAllBanks();
while ($ligne=$listeBank->fetch()) {
			echo $ligne->ID." ".$ligne->Nom." ".$ligne->Taux." ".$ligne->Date_modif." <br>";
		}*/

?>