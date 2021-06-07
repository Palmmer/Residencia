<?php
// function conectarDB(): mysqli
// {
//     $db = mysqli_connect('localhost', 'root', 'root', 'gym');

//     if (!$db) {
//         echo "Error no se pudo conectar";
//         exit;
//     }
//     return $db;
// } 

$host = 'localhost';
$user = 'root';
$db = 'gim';
// $pass = 'root';
$pass = '';

try {
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'ERROR: ' . $e->getMessage();
}
