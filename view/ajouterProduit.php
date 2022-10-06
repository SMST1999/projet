<?php
 require_once('../controller/codeCat.php');
 require_once('../controller/Produit.php');
 ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Produit</title>
	<link rel="stylesheet" href="../assets/css/styles.css">
	<link rel="stylesheet" href="../assets/css/ajouterProduit.css">
</head>
<body>
	<h1>Entrer un produit</h1>
	<hr>
	<form action="" method="POST">
	  <table border="2">
		<tr>
					<td>Catégorie</td>
					<td>
						<select name="articles">
							<?php
								while($donnee = $CodeCat->fetch()){
							?>
								<option value="<?php echo $donnee['CodeCat']; ?>"> <?php echo $donnee['LibelleCat']; ?></option>
							<?php
							}   
							?>	
						</select>
					</td>
				</tr>
		<tr><td>Référence</td><td><input type="text" name="reference"></td></tr>
		<tr><td>Prix</td><td><input type="nombre" name="prix"></td></tr>
		<tr><td>Libeller</td><td><input type="text" name="libeller"></td></tr>
		<tr><td>Quantiter Stock</td><td><input type="nombre" name="QteStock"></td></tr>
		<tr><td>Quantiter Alerte</td><td><input type="nombre" name="QteAlert"></td></tr>
       </table>
	   <br>
	<pre><button name="ajouter"> Ajouter</button> &nbsp 
	<br>
	<p>Pour revenir a la page d'accueil, cliquez <a href="../index.php">ici</a> </p>

	</form>
	
</body>
</html>