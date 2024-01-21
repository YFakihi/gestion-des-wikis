<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wikis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <header>
        <div class="container-fluid bg-light position-relative shadow ">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5 ">
                <a class="navbar-brand me-2" href="#">
                    <img src="<?= URL_DIR ?>public/assets/images/w.png" height="66" alt="Logo" />
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav font-weight-bold mx-auto py-0">
                        <a href="index.html" class="nav-item nav-link active me-4">Home</a>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" id="input_search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success me-2" type="submit">Search</button>
                            
                        </form>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                    Ajouter Wiki
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                        
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form action="Addwiki" method="post">
                                <div class="form-group">
                                    <label for="titre">Title</label>
                                    <input type="text" class="form-control" id="titre" name="titre" required>
                                </div>
                                <div class="form-group">
                                    <label for="contenu">Content</label>
                                    <textarea class="form-control" id="contenu" name="contenu" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="categorie">Choisir Tags</label>
                                    <div class="row">
                                        <?php foreach ($tags as $tag): ?>
                                            <div class="col-md-6">
                                                <input type="checkbox" value="<?= $tag['id'] ?>" name="tag[]" id=""><?= $tag['nom_tag'] ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div></br>
                                    <label for="categorie">Choisir Categories</label>
                                    <div class="row">
                                        <?php foreach ($cats as $cat): ?>
                                            <div class="col-md-6">
                                                <input type="radio" value="<?= $cat['id'] ?>" name="cat" id=""><?= $cat['nom'] ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Publier</button>
                            </form>
                       
                        </div>
                      </div>
                    </div>
                    
<!-- Modal -->
                    </div>
                    </div>
                 
                    <?php if(!isset($_SESSION['nom'])){?>
                    <a href="Auth/index" class="btn btn-info me-2">Sign Up</a>
                    <a href="Auth/signin" class="btn btn-info">Login</a>

                    <?php } else { ?>
                        <?php echo 'Hello'.' ' .$_SESSION['nom']; ?>
                        
                        <ul class="navbar-nav">
            
                        <li class="nav-item dropdown">
                            <a href="" class="nav-icon pe-md-0 position-relative" data-bs-toggle="dropdown">
                                <img src= "<?php URL_DIR ?>public/assets/images/icons8.png ?>" alt="icon">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end position-absolute">
                                <a href="Profile" class="dropdown-item" href="">Profile</a>
                                <?php if($_SESSION['role'] == 0 ){ ?>
                                <a href="" class="dropdown-item" href="">dashboard</a>
                                <?php } ?>
                                
                                <a href="Auth/logout" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                     
                        
                        <?php }?>
                    
                </div>
            </nav>
        </div>
    </header>
</header>
<body>

</body>

</html>


