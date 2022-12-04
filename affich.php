<nav class="navbar navbar-light bg-light"><h1>Les Animaux a Adopter</h1> <a href="rech.php">chercher un animal</a> </nav>
<div class="container">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<?php
try
{
$db =new PDO('mysql:host=localhost;dbname=animal;charset=utf8',
'root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
$sqlQuery = 'SELECT * FROM animaux';
$requete = $db->prepare($sqlQuery);
$requete->execute();
$res = $requete->fetchAll();
// On affiche chaque etudiant
echo"<table class='table table-striped table-dark' ><tr><th>race</th><th>nom</th><th>age</th><th>poid</th><th>etat</th><th>Supprimer</th></tr>";
foreach ($res as $et) {
  echo"<tr>";
  echo "<td>".$et['race']."</td>";
  echo "<td>".$et['nom']."</td>";
  echo "<td>".$et['age']." ans</td>";
  echo "<td>".$et['poid']." Kg</td>";
  echo "<td>".$et['etat']."</td>";
  echo "<td><a href='supprimer.php?nom=".$et['nom']."'>Supprimer</a></td>";
  echo"</tr>";
}
echo"</table>"

?>
<h4><a href="modifier.php">modifier animal</a>&nbsp;&nbsp;
    <a href="inserer.php">inserer animal</a></h4>
</div>