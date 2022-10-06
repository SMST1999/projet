<?php
    require_once('controller/indexcontroller.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page d'Accueil</title>
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
	<h1> SOYEZ LES BIENVENU SUR NOTRE SITE</h1>
	<hr>
	<form  method="POST">
		<table border="3">
			<tr>
				<td><ul><li>Introduire les produits entrés ou sortis du stock</li></ul></td>
				<td><input type="radio" name="choix" value="1"> </td>
			</tr>
			<tr>
				<td> <ul> <li>Détail des produits entrées</li></ul></td>
				<td ><input type="radio" name="choix" value="2" ></td>
			</tr>
			<tr>
				<td><ul><li>Détail des produits sorties</li></ul></td>
				<td ><input type="radio" name="choix" value="3" ></td>
			</tr>
            <tr>
				<td><ul><li>Ajouter  une catégories</li></ul></td>
				<td ><input type="radio" name="choix" value="4"></td>
			</tr>
			<tr>
				<td><ul><li>Ajouter un produit</li></ul></td>
				<td ><input type="radio" name="choix" value="5"></td>
			</tr>
			<tr>
				<td><ul><li>Supprimer une catégorie</li></ul></td>
				<td ><input type="radio" name="choix" value="6"></td>
			</tr>
			<tr>
				<td><ul><li>Supprimer un produit</li></ul></td>
				<td ><input type="radio" name="choix" value="7"></td>
			</tr>
		</table>
		<p>
		
		<input type="submit" value="Continuer" name="continuer"  >
		<p>
	                        
	 </form> 
</body>
</html>