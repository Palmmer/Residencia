<?php
//  require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\trainer\includes\templates\sesiones.php';
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';
// concat(u.Nombre," ",u.ApellidoP," ",u.ApellidoM) as nombreusuario,WHERE u.IdUsuario = ?
// $idUsuario=$_SESSION['id'];
$sql= 'SELECT e.IdEvaluacion, e.Estado,s.Unidad,  u.IdUsuario, concat(u.Nombre," ",u.ApellidoP," ",u.ApellidoM) as nombreusuari 
 FROM evaluacion as e INNER JOIN solicitud as s ON e.IdSolicitud = s.IdSolicitud 
 INNER JOIN usuario as u ON s.IdUsuario = u.IdUsuario ';
$query= $pdo->prepare($sql);
$query->execute();
// array( $idUsuario)
$consulta = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($consulta);

for($i = 0; $i < count($consulta); $i++){

if($consulta[$i]['Estado']==0){
        $consulta[$i]['Estado']= '<span class="badge badge-warning">PENDIENTE</span>';
    }else if($consulta[$i]['Estado']==1){
        $consulta[$i]['Estado']= '<span class="badge badge-success">ACREDITADO</span>';
    }else{
        $consulta[$i]['Estado']= '<span class="badge badge-danger">NO ACREDITADO</span>';
    }
    $consulta[$i]['Acciones']= '
    <button class="btni btn-info" title="Evaluar" onclick="editEvaluacion('.$consulta[$i]['IdEvaluacion'].')"
    ><i class="fas fa-edit"></i></button>
    ';

}

// for($i = 0; $i < count($consulta); $i++){
    
// }

echo json_encode($consulta,JSON_UNESCAPED_UNICODE);
die();