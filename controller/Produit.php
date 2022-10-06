<?php
 include('../model/serveur.php');

 if(isset($_POST['ajouter'])){
   if (!empty($_POST['reference']) && !empty($_POST['prix']) && !empty($_POST['libeller']) && !empty($_POST['QteStock']) && !empty($_POST['QteAlert']))
   {
      //Insertion dans la base de donnée
       $reference= $_POST['reference'];
       $prix= $_POST['prix'];
       $libeller= $_POST['libeller'];
       $QteStock= $_POST['QteStock'];
       $QteAlert= $_POST['QteAlert'];
       
       $req = "INSERT INTO produit VALUES ('".$reference."',' ".$prix."','" .$libeller."',' ".$QteStock."',' ".$QteAlert."','".$_POST['articles']." ')";
  
       $ins = $pdo->prepare($req);
  
       $ins->execute();
     
        echo "Enregistrement avec succès";
   }
   else {
      echo "Veillez remplir tous les champs" ;
   }

 }
 
?>
