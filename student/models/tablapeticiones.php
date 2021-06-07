<?php
 require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\student\includes\templates\sesiones.php';
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';
// concat(u.Nombre," ",u.ApellidoP," ",u.ApellidoM) as nombreusuario,WHERE u.IdUsuario = ?
$idUsuario=$_SESSION['id'];
$sql= 'SELECT IdSolicitud, Liga, Unidad, Estado, Fecha, Hora,  u.IdUsuario  FROM solicitud as s INNER JOIN usuario as u ON s.IdUsuario = u.IdUsuario WHERE u.IdUsuario = ? ';
$query= $pdo->prepare($sql);
$query->execute(array( $idUsuario));

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($consulta);
for($i = 0; $i < count($consulta); $i++){
    if($consulta[$i]['Liga']== null){
        $consulta[$i]['Liga']= '<span class="badge badge-primary">NO DISPONIBLE</span>';
    }else {
        $consulta[$i]['Liga']= '
        <button class="btni btn-light" title="Abrir"><a target="_blank" href="https://'.$consulta[$i]['Liga'].'" class="fas fa-video"></a></button> <span class="badge badge-success">DISPONIBLE</span>';
    }
   

if($consulta[$i]['Estado']==0){
        $consulta[$i]['Estado']= '<span class="badge badge-warning">PENDIENTE</span>';
    }else if($consulta[$i]['Estado']==1){
        $consulta[$i]['Estado']= '<span class="badge badge-success">CONFIRMADO</span>';
    }else{
        $consulta[$i]['Estado']= '<span class="badge badge-danger">CANCELADA</span>';
    }
}

// for($i = 0; $i < count($consulta); $i++){
//     $consulta[$i]['acciones']= '
// <button class="btni btn-info" title="Informacion-Tutor" onclick="infoTutor('.$consulta[$i]['IdUsuario'].')"
// ><i class="fas fa-info-circle"></i></button>
// <button class="btni btn-info" title="Historial" onclick="historiall('.$consulta[$i]['IdUsuario'].')"
// ><i class="fas fa-notes-medical"></i></button>

// ';

// }

echo json_encode($consulta,JSON_UNESCAPED_UNICODE);
die();