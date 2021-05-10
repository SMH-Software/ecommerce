<?php 
    
    session_start();
     
    require_once("script-db.php");
  
    $email=isset($_POST['email'])?$_POST['email']: "";
    $password=isset($_POST['password'])?$_POST['password']: "";


    $reqUser="SELECT * FROM `utilisateurs` WHERE email='$email' and password=md5('$password')";
    $psUser=$pdo->prepare($reqUser);
    $psUser->execute(); 

    if($user=$psUser->fetch()){
     
         $_SESSION['PROFILE']=$user;
         header("location:../pages/index.php");
        
    }else
    {
    
        header("location:../pages/connexion.php?errorlogin=1");
         
    }

  

?>
