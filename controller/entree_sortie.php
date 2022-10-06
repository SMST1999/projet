<?php
 include('../model/serveur.php');

 if(isset($_POST['ajouter'])){
   if (!empty($_POST['id']) && !empty($_POST['date']) && !empty($_POST['montant']))
   {
      //Insertion dans la base de donnée
       $id = $_POST['id'];
       $date = $_POST['date'];
       $montant = $_POST['montant'];
       
       $req = "INSERT INTO entree (idEntree,dateEntree,montantEntree) VALUES ('$id',' $date',' $montant')";
  
       $ins = $pdo->prepare($req);
  
       $ins->execute();
     
        echo "Enregistrement avec succès";
   }
   else {
      echo "Veillez remplir tous les champs" ;
   }

 }
 
?>
