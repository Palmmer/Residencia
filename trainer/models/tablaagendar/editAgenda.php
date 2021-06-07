<?php
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';
if(!empty($_GET)){
    $idsolicitud=$_GET['idsolicitud'];
    
    $sql="SELECT * FROM solicitud WHERE IdSolicitud = ?";
    $query=$pdo->prepare($sql);
    $query->execute(array($idsolicitud));
    $result=$query->fetch(PDO::FETCH_ASSOC);

    if(empty($result)){
        $respuesta= array('status' => false,'msg'=>'Datos no encontrados');

    }else{
        $respuesta= array('status' => true,'data'=>$result);
    }
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
}