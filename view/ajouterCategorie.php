<?php
 require_once('../controller/Categorie.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Catégorie</title>
	<link rel="stylesheet" href="../assets/css/styles.css">
	<link rel="stylesheet" href="../assets/css/ajouterCategorie.css">
</head>
<body>
	<h1>Entrer un catégorie</h1>
	<hr>
	<form action="" method="POST">
	<table border="2">
       <tr><td>Code</td><td><input type="text" name="code"></td></tr>
       <tr><td>Libeller</td><td><input type="text" name="libeller"></td></tr>
       </table>
	   <br>
	<pre><button name="ajouter"> Ajouter</button>&nbsp
	<br>
	<p>Pour revenir a la page d'accueil, cliquez <a href="../index.php">ici</a> </p>

 </form> 
</body>
</html>