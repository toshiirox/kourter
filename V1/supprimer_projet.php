<?php 
require_once ('class.projet.php');
$id=$_GET['id'];
echo $id;
$suppression=projet::deleteProjetByID($id);
?>