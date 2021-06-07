<?php
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';

$sql= 'SELECT IdUsuario,Nombre, ApellidoP, ApellidoM, FechaNacimiento, Email, Ciudad, Direccion FROM usuario as u INNER JOIN rol as r ON u.IdRol = r.IdRol WHERE u.IdRol = 2';
$query= $pdo->prepare($sql);
$query->execute();

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($consulta);

for($i = 0; $i < count($consulta); $i++){
$consulta[$i]['acciones']= '
<button class="btni btn-info" title="Informacion-Tutor" onclick="infoTutor('.$consulta[$i]['IdUsuario'].')"
><i class="fas fa-info-circle"></i></button>
<button class="btni btn-info" title="Historial" onclick="historiall('.$consulta[$i]['IdUsuario'].')"
><i class="fas fa-notes-medical"></i></button>';

}

echo json_encode($consulta,JSON_UNESCAPED_UNICODE);
die();