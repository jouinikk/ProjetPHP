<?php
$id=$_GET["nom"];
try
{
$db =new PDO('mysql:host=localhost;dbname=animal;charset=utf8','root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
$sqlQuery = "DELETE FROM animaux WHERE nom = $id";
$requete = $db->prepare($sqlQuery);
$requete->execute();
header('location:affich.php');
?>