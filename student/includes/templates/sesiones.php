<?php
session_start();
if(empty($_SESSION['activeP'])){
  header('Location: ./');
}
?>