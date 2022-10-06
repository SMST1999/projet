<?php
global $CodeCat;
include('../model/serveur.php');
$CodeCat=$pdo->query("SELECT * from categorie");
?>
