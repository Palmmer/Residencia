<?php
require 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';
if(!empty($_GET)){
    $IdUsuario=$_GET['IdUsuario'];
    
    $sql='SELECT concat(tutor.Nombre," ",tutor.ApelidoP," ",tutor.ApellidoM) as nombretutor, tutor.* FROM tutor WHERE IdUsuario = ?';
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