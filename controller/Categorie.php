<?php
 include('../model/serveur.php');

 if(isset($_POST['ajouter'])){
   if (!empty($_POST['code']) && !empty($_POST['libeller']))
   {
      //Insertion dans la base de donnée
       $code = $_POST['code'];
       $libeller = $_POST['libeller'];
       
       $req = "INSERT INTO categorie (CodeCat,LibelleCat) VALUES ('$code',' $libeller')";
  
       $ins = $pdo->prepare($req);
  
       $ins->execute();
     
        echo "Enregistrement avec succès";
   }
   else {
      echo "Veillez remplir tous les champs" ;
   }

 }
 
?>
