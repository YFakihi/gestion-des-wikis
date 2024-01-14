<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="public/assets/css/dash.css">
    <title>Document</title>
</head>


  

<body>

    <div class="menu">
        <ul class="menu__list">
            <li class="menu__list__item menu__list__item__profile">
                <div class="menu__profile">
                    <img src="/assets/images/profile.jpg" alt="">
                </div>
                <h4 class="menu__profile__name">Yasin Fakihi</h4>
            </li>
            <li class="menu__list__item">
                <a href="">
                    <i class="fas fa-home"></i>
                    <p>home</p>
                </a>
            </li>
            <li class="menu__list__item">
                <a href="">
                    <i class="fas fa-user-group"></i>
                    <p>users</p>
                </a>
            </li>
            <li class="menu__list__item">
                <a href="">
                    <i class="fas fa-table"></i>
                    <p>dashboard</p>
                </a>
            </li>
            <li class="menu__list__item">
                <a href="">
                    <i class="fas fa-chart-pie"></i>
                    <p>dashboard</p>
                </a>
            </li>

            <li class="menu__list__item__logout">
                <a href="">
                    <i class="fas fa-sign-out"></i>
                    <p>Log Out</p>
                </a>
            </li>
        </ul>

    </div>


    <main class="container">
        <div class="container__header">
            <h3>dashboard</h3>
            <i class="fas fa-chart-pie"></i>
        </div>
        <div class="container__statistique">
            <div class="container__statistique__data">
                <i class="fas fa-user"></i>
                <div class="container__statistique__info">
                    <p>users</p>
                    <p class="container__statistique__detail"><?= count($users) ?></p>
                </div>
            </div>
            <div class="container__statistique__data">
                <i class="fas fa-pen"></i>
                <div class="container__statistique__info">
                    <p>wikis</p>
                    <p class="container__statistique__detail"><?= count($wikis) ?></p>
                </div>
            </div>
            <div class="container__statistique__data">
                <i class="fas fa-tag"></i>
                <div class="container__statistique__info">
                    <p>tags</p>
                    <p class="container__statistique__detail"><?=count($tags) ?></p>
                </div>
            </div>
            <div class="container__statistique__data">
                <i class="fas fa-table"></i>
                <div class="container__statistique__info">
                    <p>categories</p>
                </div>
            </div>

        </div>
        <div class="container__header">
            <h3>Wikis Statistiques</h3>
            <i class="fas fa-pen"></i>
        </div>

        <table class="container__table">
            <thead>
                <tr>
                    <th>titre</th>
                    <th>Nom Categorie</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
           <?php foreach($wikis as $wiki) : ?>
           
                    <tr>
                        <td><?= $wiki['titre'] ?></td>
                        <td><?= $wiki['nom'] ?></td>
                        <td>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $wiki['id'] ?>">
                                voir wiki
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $wiki['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 text-dark " id="exampleModalLabel"><?= $wiki['titre'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-dark ">
                                        <?= $wiki['contenu'] ?>
                                        </div>
                                        <form action="Dashboard/accept" method="post">
                                                    <input type="hidden" name="id" value="<?= $wiki['id'] ?>"></br>
                                                    <button type="submit" class="btn btn-outline-primary" name="isaccept">accepter</button>
                                        </form>
                                        <form action="Dashboard/delete" method="post">
                                                    <input type="hidden" name="id" value="<?= $wiki['id'] ?>">
                                                    <button type="submit" class="btn btn-outline-danger" name="isaccept">Delete</button>
                                     </form>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
           <?php endforeach ?>
            </tbody>
            
        </table>
        <div class="container__header">
            <h3>Tags Statistiques</h3>
            
            <i class="fas fa-tag"></i>
        </div>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Ajoute
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 text-dark " id="exampleModalLabel">Ajouter Wiki</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-dark ">
                                        <form action="Dashboard/addTags" method="post">
                                    <div class="form-group">
                                        <label for="tag">Nom Tag</label>
                                        <input type="text" class="form-control" id="nom_tag" name="nom_tag" aria-describedby="tag" placeholder="Enter Tag">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>  
                                        </div>
                                    </div>
                                </div>
                            </div>
        <table class="container__table">
            <thead>
                <tr>
                    <th>nom</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
               <?php 
          
               
               foreach($tags as $tag) :?>

                 
                    <tr>  
                        <td><?= $tag["nom_tag"] ?></td>
                        <td>
                           
                                                    <a href="Dashboard/updatTag" <?= $tag['id'] ?> type="submit" class="btn btn-success" name="updatetag">modifier</a>
                          
                            
                                                    <a href="Dashboard/deletetag" <?= $tag['id'] ?> type="submit" class="btn btn-danger" name="deletetag">Delete</a>

                             
                        </td>
                    </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <div class="container__header">
            <h3>Categories Statistiques</h3>
            <i class="fas fa-table"></i>
        </div>
    

        <table class="container__table">
            <thead>
                <tr>
                    <th>nom</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>



     <?php foreach ($cats as $cat) : ?>
    <tr>
        <td><?= $cat['nom'] ?></td>
        <td>
                           
            <a href="" <?= $cat['id'] ?> type="submit" class="btn btn-success" name="updatetag">modifier</a>
            <a href="" <?= $cat['id'] ?> type="submit" class="btn btn-danger" name="deletetag">Delete</a>

    
</td>
    </tr>
    <?php endforeach; ?>
            </tbody>
        </table>
        <div class="container__header">
            <h3>Users Statistiques</h3>
            <i class="fas fa-user-group"></i>
        </div>

        <table class="container__table">
            <thead>
                <tr>
                    <th>nom</th>
                    <th>email</th>
                    <th>role</th>
                </tr>
            </thead>
            <tbody>



     <?php foreach ($users as $user) : ?>
    <tr>
        <td><?= $user['nom'] ?></td>
        <td><?= $user['email'] ?></td>
        <td><?= $user['role'] ?></td>
    </tr>
<?php endforeach; ?>
            </tbody>
        </table>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>