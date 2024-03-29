
<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <title>Document</title>
</head>
<?php 
include __DIR__.('./includes/navbar.php');
?>
<body>
<div class="row" id="search_list" >
  <?php foreach ($allWikis as $wiki): ?>
    <div class="col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center">
      <a href="#" class="card stretched-link text-decoration-none">
        <div style="max-width: 23rem;" class="card">
          <img src="<?= URL_DIR ?>public/assets/images/bkog.png" alt="gara" style="height: 9rem;" class="my-2 position-relative">
          <div class="card-body">
            <div class="card-head">
              <h5 class="card-title fw-semibold text-center"><?= $wiki['titre'] ?></h5>
              <p class="text-center"><?= $wiki['nom'] ?></p>
              <p class="card-text text-center text-truncate"><?= $wiki['contenu'] ?></p>
            </div>
          </div>
        </div>
      </a>
    </div>
  <?php endforeach; ?>
</div>

    <footer class="footer bg-primary text-light text-center py-3 ">
  <div class="container">
    <p>&copy; 2024 Your wikis</p>
  </div>
</footer>


</body>
<script>

     // Assurez-vous que le DOM est chargé avant d'exécuter du code jQuery
    $(document).ready(function(){


        $("#input_search").keyup(function(){
            var input = $(this).val(); 
            if(input == "") input = 'all';
 
            $.ajax({
                url: "http://localhost/gestion-des-wikis/Home/search",
                method: "POST",
                data: {input: input},
                success: function(data){
                    $("#search_list").html(data);
                }
            });
        });
    });

</script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../../public/assets/lib/easing/easing.min.js"></script>
    <script src="../../public/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../public/assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../../public/assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../../public/assets/js/mail/jqBootstrapValidation.min.js"></script>
    <script src="../../public/assets/js/mail/contact.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
   
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- javascript links -->
  <script src="javascript/main.js"></script>

    <!-- Template Javascript -->
    <script src="../../public/assets/js/main.js"></script>
</html>














