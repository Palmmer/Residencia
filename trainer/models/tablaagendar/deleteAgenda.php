<?php
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';

if($_POST){
    $idsolicitud= $_POST['idsolicitud'];
    $sql="DELETE FROM solicitud WHERE IdSolicitud=?";
    $query=$pdo->prepare($sql);
    $result=$query->execute(array($idsolicitud));
   
    if($result){
      $respuesta= array('status'=>true,'msg'=>'Cita eliminada correctamente');
    }else{
        $respuesta= array('status'=>false,'msg'=>'Error al eliminar la cita'); 
    }
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
}