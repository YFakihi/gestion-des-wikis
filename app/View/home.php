
<!DOCTYPE html>
<html lang="en">
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
<section class= "hero">
    
    </section>
    <div class="row">
    <?php  foreach ($allWikis as $wiki): ?>
    
      
  
    <div class="col-sm-12 col-md-6 ">
        <div class="card">
        <div class="col-md-4">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/C_Programming_Language.svg/280px-C_Programming_Language.svg.png" class="w-100" alt="...">
      </div>
          <div class="card-body">
          <h5 class="card-title"><?= $wiki['titre'] ?></h5>
          <h5 class="card-title"><?= $wiki['nom'] ?></h5>
            
            <a href="#" class="stretched-link""></a>
          </div>
        </div>
      </div>
       
    
      <?php endforeach; ?>
    </div>
    <footer class="footer bg-info text-light text-center py-3 ">
  <div class="container">
    <p>&copy; 2024 Your wikis</p>
  </div>
</footer>


</body>
</html>














