<?php 
session_start();  
// Include config file
require_once "config.php";

// comprobar si tenemos los parametros w1 y w2 en la URL
if (isset($_GET["w1"]) && isset($_GET["w2"])) {
   // asignar w1 y w2 a dos variables
   $userScore = $_GET["w1"];
   $status = $_GET["w2"];



   if (isset($_POST['restart'])) {
    $query = " insert into evaluacion_usuario values (1,".$_SESSION['id_usuario'].",'".$_SESSION['Id_Entrenador']."', $userScore, 'Test',$status) ";
      // mostrar $phpVar1 y $phpVar2
      echo "<p>Parameters: " . $phpVar1 . " " . $phpVar1 . "</p>";
   // mostrar $phpVar1 y $phpVar2
   echo "<p>Parameters: " . $query . " " . $phpVar1 . "</p>";

    mysqli_query($link, $query);  
    mysqli_close($link);
   }

} else {
    echo "<p>No parameters</p>";
 }
 ?>  