
<?php  
 session_start();  
 // Include config file
require_once "config.php";


if(count($_SESSION)>0)  {
     session_unset();    // Destruimos las variables de sesión
     session_destroy();	// Destruimos finalmente la información de la sesión  
   }
   $clave=$_POST["password"];
   $email=$_POST["email"];
   
   if(isset($email))  
   {  
  
  
        $query = "SELECT  Usuario.IdUsuario, Usuario.Email, Usuario.Clave, Usuario.IdRol FROM USUARIO 
        INNER JOIN Rol ON Rol.IdRol = Usuario.IdRol  WHERE Email = $email AND Clave = $clave "; 
        
        $result = mysqli_query($link, $query);  
        if(mysqli_num_rows($result) > 0)  
        {  
             $_SESSION['Email'] = $email; 
             $row= $result->fetch_array();
             $_SESSION['IdUsuario']= $row['IdUsuario']; 
             $_SESSION['IdRol']= $row['IdRol']; 
           echo 'Yes';  
      }  
      else  
      {   
           echo 'No';  
      }  
      
 }  
 if(isset($_POST["action"]))  
 {  
      unset($_SESSION["username"]);  
 }  
 ?>  