<?php
require_once('../scripts/script-secure.php');

require_once("../scripts/script-db.php");

$requete="SELECT * FROM articles WHERE categories='Périphérique et Accessoires' ";
$resultat=$pdo->prepare($requete);
$resultat->execute();


?>
<?php include('header.php') ?>
<?php if(isset($_GET['success'])) { ?>
    <div class="success"  data-success="<?= $_GET['success']; ?>"></div>
  <?php } ?>

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="create_pa.php" class="btn btn-sm">Ajouter nouvel article</a>
       
      </div>
      <div class="">
        <h2 style="text-align: center;">Gestion Périphériques et Accessoires </h2>
        <table>
          <thead>
            <th>Image</th>
            <th>Désignation</th>
            <th>Description</th>
            <th>Prix</th>
            <th colspan="3">Action</th>
          </thead>
          <tbody>
          <?php while($article=$resultat->fetch()) { ?>
            <tr class="rec">
              <td><img src="../images/<?= $article['images'] ?>" alt="" width="50" heigth="50"></td>
              <td><?= $article['designation'] ?></td>
              <td><?= $article['description'] ?></td>
              <td><?= $article['prix'] ?> Dt</td>
              <td>
                <a href="edit_pa.php?idarticle=<?= $article['id'] ?>" class="edit">
                  <i class="fa fa-edit"></i>
                </a>
              </td>
              <td>
                <a href="#" class="delete">
                <i class="fa fa-trash"></i>
                </a>
              </td>
             
            </tr>
            <?php  } ?> 
            
           
          </tbody>
        </table>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>

<script src="../js/scripts.js"></script>

<script>
            const success = $('.success').data('success');

            if(success)
            {
                Swal.fire({
                    icon: 'info',
                    title: 'Succès',
                    html: "<b class='text-warning'>article mis à jour avec succès",
                    timer: 5000
                });

            }
  </script>

</body>

</html>