<?php 
$param_hote='localhost';
$param_port='3306';
$param_nom_bd='taux_credit';
$param_utilisateur='root';
$param_mot_passe="";

$connectionStr='mysql:host='.$param_hote.';dbname='.$param_nom_bd.';charset=UTF8';
try {
	$connexion=new PDO($connectionStr,$param_utilisateur,$param_mot_passe);
	$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Erreur: ".$e->getMessage().'<br>';
	echo "N°: ".$e->getCode();
}
?>