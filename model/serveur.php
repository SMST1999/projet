<?php
  require('../config/config.php');
  try {
    $pdo = new  PDO('mysql:host=localhost; dbname=gestion_stock;  charset=utf8', 'root','');
} catch (PDOExecption $e) {
   echo $e->getMessage();
}

?>