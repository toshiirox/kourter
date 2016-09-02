<?php 
require_once("dbconfig.php");

class offre {
	public $id_offre;
	public $nom_agence;
	public $taux_offre;
	public $montant_mini;
	public $type_offre;
	public $user_id;


	public function __construct($id_offre,$nom_agence,$taux_offre,$montant_mini,$type_offre,$user_id){
		global $connexion;
		$stmt=$connexion->prepare("INSERT INTO kourter.offre_banque (id_offre, nom_agence, taux_offre, montant_mini, type_offre, user_id) 
			VALUES (NULL, :nom_agence, :taux_offre, :montant_mini, :type_offre, :user_id)");
		$stmt->bindValue(':nom_agence',$nom_agence);
		$stmt->bindValue(':taux_offre',$taux_offre);
		$stmt->bindValue(':montant_mini',$montant_mini);
		$stmt->bindValue(':type_offre',$type_offre);
		$stmt->bindValue(':user_id',$user_id);
		$stmt->execute();
		$this->nom_agence=$nom_agence;
		$this->taux_offre=$taux_offre;
		$this->montant_mini=$montant_mini;
		$this->type_offre=$type_offre;
		$this->user_id=$user_id;
	}

	public static function getAllfromOffre($id){
		global $connexion;
		$req=$connexion->prepare("SELECT * FROM offre_banque WHERE user_id=:user_id");
		$req->bindValue(":user_id",$id);
		$req->execute();
		$req->setFetchMode(PDO::FETCH_OBJ);
		return $req;
	}

	public static function getOffreByType($type, $id, $montant){
		global $connexion;
		$sql="SELECT * FROM offre_banque WHERE type_offre=:typeProjet AND user_id=:user_id AND montant_mini<=:montant_projet";
		$req=$connexion->prepare($sql);
		$req->bindValue(":typeProjet",$type);
		$req->bindValue(":user_id",$id);
		$req->bindValue(":montant_projet",$montant);
		$req->execute();
		$req->setFetchMode(PDO::FETCH_OBJ);
		return $req;
	}

	public static function deleteOffreByID($offre_id) {
		global $connexion;
		$sql="DELETE FROM offre_banque WHERE id_offre=:offre_id";
		$req=$connexion->prepare($sql);
		$req->bindValue(":offre_id",$offre_id);
		$req->execute();
	}
}
?>