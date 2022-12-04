<?php
 $log=$_GET["Input1"];
 $pass=$_GET["Input2"];
 if($log == "admin" && $pass == "admin"){
    session_start();
    $_SESSION['Input1'] = $_GET['Input1'];
    $_SESSION['Input1'] = $_GET['Input2'];
    header('location:affich.php');
}else{
    echo "<span style='color:red;'>ERREUR</span><br>Verifier vos donnee!<br>";
    echo "<a href='login.php'>Reconnecter</a>";
}
?>