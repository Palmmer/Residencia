<?php
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';
if(!empty($_GET)){
    $idevaluacion = $_GET['idevaluacion'];

    
    $sql="SELECT * FROM evaluacion WHERE IdEvaluacion = ?";
    $query=$pdo->prepare($sql);
    $query->execute(array($idevaluacion));
    $result=$query->fetch(PDO::FETCH_ASSOC);

    if(empty($result)){
        $respuesta= array('status' => false,'msg'=>'Datos no encontrados');

    }else{
        $respuesta= array('status' => true,'data'=>$result);
    }
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
}