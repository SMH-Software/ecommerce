<?php 
 
   if(isset($_POST['submit'])){

        require_once("script-db.php");

        $designation =  isset($_POST['designation']) ? $_POST['designation']: "";
        $description =  isset($_POST['description']) ? $_POST['description']: "";
        $prix =  isset($_POST['prix']) ? $_POST['prix']: "";
        $categorie =  isset($_POST['categorie']) ? $_POST['categorie']: "";

        $photo = isset($_FILES['image']['name']) ? $_FILES['image']['name']: "";

        move_uploaded_file($_FILES['image']['tmp_name'], '../images/'. $photo);

        
        $req="INSERT INTO `articles`(`designation`, `description`, `prix`, `categories`, `images`) VALUES (?,?,?,?,?)";
        $params = array($designation, $description, $prix, $categorie, $photo);
        $resultat = $pdo->prepare($req);
        $resultat->execute($params);

        header("location:../pages/create_pa.php?success=1");

   }
 
?>