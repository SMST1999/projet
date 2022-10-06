<?php
 require_once('../controller/entree_sortie.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Entrée & Sortie</title>
	<link rel="stylesheet" href="../assets/css/styles.css">
	<link rel="stylesheet" href="../assets/css/Entree_Sortie.css">
</head>
<body>
	<h1>Entrer et Sortie des marchandises du stock</h1>
	<hr>
	<form action="" method="POST">
	<table border="2">
	   
       <tr><td>ArticleID</td><td><input type="text" name="id"></td></tr>
       <tr><td>Date</td><td><input type="Date" name="date"></td></tr>
       <tr><td>Montant</td><td><input type="text" name="montant"></td></tr>
       <tr><td>Activités :</td><td><input type="radio" name="ra">Entrer <input type="radio" name="ra">Sortir</td></tr>
       
       </table>
	<br>
	<pre><button name="ajouter"> Exécuter</button>&nbsp
	<br>
	<p>Pour revenir a la page d'acceille, cliquez <a href="../index.php">ici</a> </p>
</form>
</body>
</html>