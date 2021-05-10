<?php include('header.php') ?>

<?php if(isset($_GET['success'])) { ?>
    <div class="success"  data-success="<?= $_GET['success']; ?>"></div>
  <?php } ?>
    <!-- Admin Content -->
    <div class="admin-content clearfix">
      
 
      <div class="">
        <h2 style="text-align: center;">Ajouter un article</h2>

        <form action="../scripts/create_bureau.php" method="post" enctype="multipart/form-data">
          <div class="input-group">
            <label>Image</label>
            <input type="file" name="image" class="text-input"> 
          </div>
          <div class="input-group">
            <label>Désignation</label>
            <input type="text" name="designation" class="text-input">
          </div>
          <div class="input-group">
            <label>Description</label>
            <textarea class="text-input" name="description"></textarea>
          </div>
          <div class="input-group">
            <label>Prix</label>
            <input type="number" name="prix" class="text-input">
          </div>
          <div class="input-group">
            <input type="text" name="categorie" class="text-input" value="ordinateur bureau" hidden>
          </div>
          
          <div class="input-group">
            <button type="submit" name="submit" class="btn" >Ajouter maintenant</button>
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

<script>
            const success = $('.success').data('success');

            if(success)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    html: "<b class='text-success'>Produit ajouté avec succès",
                    timer: 5000
                });

            }
  </script>

</body>

</html>