<?php
 include('../model/serveur.php');

   if (!empty($_POST['reference']) && !empty($_POST['prix']) && !empty($_POST['libeller']) && !empty($_POST['QteStock']) && !empty($_POST['QteAlert']))
   {
      //Recupration dans la base de donnée
       $reference= $_POST['reference'];
       $prix= $_POST['prix'];
       //$libeller= $_POST['libeller'];
       $QteStock= $_POST['QteStock'];
       //$QteAlert= $_POST['QteAlert'];
       
       $req = "SELECT * FROM produit WHERE $reference='".$ReferencePro."' AND $prix='".$Prix."' AND $QteStock='".$QteStock."'    ";
  
       $ins = $pdo->prepare($req);
  
       $ins->execute();
     
        echo "Enregistrement avec succès";
   }
   else {
      echo "Veillez remplir tous les champs" ;
   }
 
?>
