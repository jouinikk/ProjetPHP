<?php
    $name = $_POST['nom'];
try
{
    $db =new PDO('mysql:host=localhost;dbname=animal;charset=utf8','root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
$sqlQuery = "SELECT * FROM animaux where nom = '$name'";
$requete = $db->prepare($sqlQuery);
$requete->execute();
$res = $requete->fetchAll();
echo"<table class='table table-bordered table-dark' ><tr><th>race</th><th>nom</th><th>age</th><th>poid</th><th>etat</th></tr>";
foreach ($res as $et) {
  echo"<tr>";
  echo "<td>".$et['race']."</td>";
  echo "<td>".$et['nom']."</td>";
  echo "<td>".$et['age']."ans</td>";
  echo "<td>".$et['poid']."Kg</td>";
  echo "<td>".$et['etat']."</td>";
  echo"</tr>";
}
echo"</table>";
echo "<a href='affich.php'>retour</a>";
?>