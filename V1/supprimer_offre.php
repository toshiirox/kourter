<?php 
require_once ('class.offre.php');
$id=$_GET['id'];
echo $id;
$suppression=offre::deleteOffreByID($id);
?>