<?php 
    
    if(isset($_POST['submit'])){

     require_once("script-db.php");

     $designation =  isset($_POST['designation']) ? $_POST['designation']: "";
     $description =  isset($_POST['description']) ? $_POST['description']: "";
     $prix =  isset($_POST['prix']) ? $_POST['prix']: "";
     $categorie =  isset($_POST['categorie']) ? $_POST['categorie']: "";
     $id =  isset($_POST['id']) ? $_POST['id']: "";

     $image = isset($_FILES['image']['name']) ? $_FILES['image']['name']: "";

     move_uploaded_file($_FILES['image']['tmp_name'], '../images/'. $image);

     if(!empty($image)) 
     {
          $requete="UPDATE `articles` SET `designation`=?,`description`=?,`prix`=?,`categories`=?,`images`=? WHERE `id`=?";
          $params=array($designation,$description,$prix,$categorie,$image,$id);
         
         
         
     }else
     {
         
          $requete="UPDATE `articles` SET `designation`=?,`description`=?,`prix`=?,`categories`=? WHERE `id`=?";
          $params=array($designation,$description,$prix,$categorie,$id);
         
         
         
     }
    
     $resultat=$pdo->prepare($requete);
     $resultat->execute($params); 
    

     header("location:../pages/ordinateur_bureau.php?success=1");

}


?>