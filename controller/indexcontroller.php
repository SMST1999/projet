<?php
	if (isset($_POST['choix'], $_POST['continuer']))
	{
		switch ($_POST['choix']) {
			case '1':
				header("Location: view/entree_sortie.php");
				break;
			case '2':
				header("Location: view/DetailEntree.php");
				break;
			case '3':
				header("Location: view/DetailSortie.php");
				break;
			case '4':
				header("Location: view/ajouterCategorie.php");
				break;
			case '5':
				header("Location: view/ajouterProduit.php");
				break;

			default:
				# code...
				break;
		}
	}
?>