<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="icon" type="image/png" href="../images/favicon.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../css/admin.css">
  
  <title>Tableau de bord</title>
</head>

<body>

  <!-- header -->
  <header class="clearfix">
    <div class="logo">
      <!-- <img src="images/logo-placeholder.png" alt="Logo"> -->
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="index.php">Acceuil</a></li>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            Awa Melvine
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="index.php">Espace Admin</a></li>
            <li><a href="../scripts/logout.php" class="logout">Se Déconnecter</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- // header -->
  
  <div class="admin-wrapper clearfix">
    <!-- Left Sidebar -->
    <div class="left-sidebar">
      <ul>
        <li><a href="ordinateur_portable.php">Ordinateur portable</a></li>
        <li><a href="ordinateur_bureau.php">Ordinateur de bureau</a></li>
        <li><a href="tablettes.php">Tablettes</a></li>
        <li><a href="peripherique_accessoire.php">Périphérique et Accessoires</a></li>
        
      </ul>
    </div>
    <!-- // Left Sidebar -->