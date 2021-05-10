<?php

require_once('../scripts/script-secure.php');

require_once("../scripts/script-db.php");

$idarticle = isset($_GET['idarticle']) ? $_GET['idarticle']: null;

$requete="SELECT * from articles WHERE id='$idarticle'";
$resultat= $pdo->prepare($requete);
$resultat->execute();

$article=$resultat->fetch();


?>

<?php include('header.php') ?>


    <!-- Admin Content -->
    <div class="admin-content clearfix">
      
      <div class="">
        <h2 style="text-align: center;">Mise à jour pc</h2>

        <form action="../scripts/update_pa.php" method="post" enctype="multipart/form-data">
          <div class="input-group">
            <label>Image</label><br>
            <img src="../images/<?= $article['images']?>" alt="" width="100" heigth="100">
            <input type="file" name="image" class="text-input" value="<?= $article['images']?>">
          </div>
          <div class="input-group">
            <label>Désignation</label>
            <input type="text" name="designation" class="text-input" value="<?= $article['designation']?>">
          </div>
          <div class="input-group">
            <label>Description</label>
            <textarea class="text-input" name="description" id="body"><?= $article['description']?></textarea>
          </div>
          <div class="input-group">
            <label>Prix</label>
            <input type="number" name="prix" class="text-input" value="<?= $article['prix']?>">
          </div>
          <div class="input-group">
             <input type="text" name="categorie" class="text-input" value="<?= $article['categories']?>" hidden>
          </div>
          <div class="input-group">
             <input type="text" name="id" class="text-input" value="<?= $article['id']?>" hidden>
          </div>
          
          <div class="input-group">
            <button type="submit" name="submit" class="btn" >Mettre à jour maintenant</button>
          </div>
        </form>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>

<script src="../js/scripts.js"></script>



</body>

</html>