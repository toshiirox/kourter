<?php 
require_once("dbconfig.php");

class projet {
	public $id_projet;
	public $budget_projet;
	public $nom_client;
	public $prenom_client;
	public $situation_client;
	public $revenu_client;
	public $duree_emprunt;
	public $type_projet;
	public $user_id;
	
	
	public function __construct($id_projet,$budget_projet,$nom_client,$prenom_client,$situation_client,$revenu_client,$duree_emprunt,$type_projet,$user_id){
		global $connexion;
		$stmt=$connexion->prepare("INSERT INTO kourter.projet (id_projet, budget_projet, nom_client, prenom_client, situation_client, revenu_client, duree_emprunt, type_projet, user_id) VALUES (NULL, :budget_projet, :nom_client, :prenom_client, :situation_client, :revenu_client, :duree_emprunt, :type_projet, :user_id)");
		$stmt->bindValue(":budget_projet", $budget_projet);
		$stmt->bindValue(":nom_client", $nom_client);
		$stmt->bindValue(":prenom_client", $prenom_client);
		$stmt->bindValue(":situation_client", $situation_client);
		$stmt->bindValue(":revenu_client", $revenu_client);
		$stmt->bindValue(":duree_emprunt", $duree_emprunt);
		$stmt->bindValue(":type_projet", $type_projet);
		$stmt->bindValue(":user_id", $user_id);
		$stmt->execute();
		$this->id_projet=$id_projet;
		$this->budget_projet=$budget_projet;
		$this->nom_client=$nom_client;
		$this->prenom_client=$prenom_client;
		$this->situation_client=$situation_client;
		$this->revenu_client=$revenu_client;
		$this->duree_emprunt=$duree_emprunt;
		$this->type_projet=$type_projet;
		$this->user_id=$user_id;

	}

	public static function getAllfromProjet(){
		global $connexion;
		$req=$connexion->query("SELECT * FROM projet");
		$req->setFetchMode(PDO::FETCH_OBJ);
		return $req;
	}

	public static function getProjetbyType($type){
		global $connexion;
		$req=$connexion->query("SELECT * FROM projet WHERE type_projet=:type");
		$req->bindValue(':type',$type);
		$req->setFetchMode(PDO::FETCH_OBJ);
		return $req;
	}
	public static function getProjetbyID($id_projet){
		global $connexion;
		$sql="SELECT * FROM projet WHERE id_projet=".$id_projet;
		$req=$connexion->query($sql);
		// $req->bindValue(':id_projet',$id_projet);
		$req->setFetchMode(PDO::FETCH_OBJ);
		return $req;
	}



}





















?>