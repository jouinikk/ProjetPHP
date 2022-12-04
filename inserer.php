<form action="inserer.php" method="POST">
Introduire la race : <input type="text" name="race"><br>
Introduire Le nom  : <input type="text" name="nom"><br>
Introduire l'age   : <input type="text" name="age"><br>
Introduire le poid : <input type="text" name="poid"><br>
Introduire l'etat  : <input type="text" name="etat"><br>
<input type="submit" value="Envoi">
</form> 
<?php
if (!empty($_POST))
{
    $varrace=$_POST['race'];
    $varnom=$_POST['nom'];
    $varage=$_POST['age'];
    $varpoid=$_POST['poid'];
    $varetat=$_POST['etat'];   
//connexion à la base de données
try
{
$db =new PDO('mysql:host=localhost;dbname=animal;charset=utf8',
'root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
// execution de la requete d insertion
$sqlQuery = "INSERT INTO animaux(race,nom,age,poid,etat)
VALUES('$varrace','$varnom','$varage','$varpoid','$varetat')";
$requete = $db->prepare($sqlQuery);
$requete->execute();
}
?>
<a href="affich.php">retour</a>