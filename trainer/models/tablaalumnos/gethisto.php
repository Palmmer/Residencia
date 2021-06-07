<?php
require 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';
if(!empty($_GET)){
    $IdUsuario=$_GET['IdUsuario'];

    $sql='SELECT concat(usuario.Nombre," ",usuario.ApellidoP," ",usuario.ApellidoM) as nombrealum, historialme.*,
     estudio.Descripcion as gradoEstudio, enfermedades.Descripcion as nombreEnfermedad, lesion.* FROM usuario 
    INNER JOIN historialme ON usuario.IdUsuario = historialme.IdUsuario 
    INNER JOIN estudio ON historialme.IdHistorialM = estudio.IdHistorialM 
    INNER JOIN enfermedades ON estudio.IdHistorialM = enfermedades.IdHistorialM 
    INNER JOIN lesion ON enfermedades.IdHistorialM = lesion.IdHistorialM WHERE usuario.IdUsuario = ?';
    $query=$pdo->prepare($sql);
    $query->execute(array($IdUsuario));
    $result=$query->fetch(PDO::FETCH_ASSOC);

    if(empty($result)){
        $respuesta= array('status' => false,'msg'=>'Datos no encontrados');

    }else{
        $respuesta= array('status' => true,'data'=>$result);
    }
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
}