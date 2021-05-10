<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="icon" type="image/png" href="../images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style.css">

  <title>Connexion</title>
</head>

<body>

  <?php if(isset($_GET['errorlogin'])) { ?>
    <div class="error-login"  data-errorlogin="<?php echo $_GET['errorlogin']; ?>"></div>
  <?php } ?>
  <div class="auth-content">
    <form action="../scripts/login.php" method="post">
      <h3 class="form-title">CONNEXION</h3>
      <!-- <div class="msg error">
        <li>Username required</li>
      </div> -->
      <div>
        <label>Non d'utilisateur</label>
        <input type="text" name="email" class="text-input">
      </div>
     
      <div>
        <label>Mot de passe</label>
        <input type="password" name="password" class="text-input">
      </div>
      
      <div>
        <button type="submit" name="register-btn" class="btn">SE CONNECTER</button>
      </div>
     
    </form>
  </div>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

  <script src="../js/scripts.js"></script>
  <script>
            const errorlogin = $('.error-login').data('errorlogin');

            if(errorlogin)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Connexion impossible !',
                    html: "<b class='text-danger'>Email ou Mot de passe incorrecte !",
                    timer: 5000
                });

            }
  </script>

</body>

</html>