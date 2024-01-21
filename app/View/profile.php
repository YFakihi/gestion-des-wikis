
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="public/assets/css/profile.css">
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div id="content" class="content content-full-width">
            <!-- begin profile -->
            <div class="profile">
               <div class="profile-header">
                  <div class="profile-header-cover"></div>
                  <div class="profile-header-content">
                     <div class="profile-header-img">
                        <img src="<?= URL_DIR ?>public/assets/images/per.png" alt="">
                     </div>
                     <div class="profile-header-info">
                        <h4 class="m-t-10 m-b-5"><?php echo 'Hello'.' ' .$_SESSION['nom']; ?></h4>                        
                     </div>
                  </div>

                  <ul class="profile-header-tab nav nav-tabs">
                     <li class="nav-item"><a href="Home" target="__blank" class="nav-link_">Home</a></li>

                  </ul>
               </div>
            </div>
 
            <div class="profile-content">
               <div class="tab-content p-0">
                  <div class="tab-pane fade active show" id="profile-post">
                     <ul class="timeline">
                        <li>                                         
                           <div class="timeline-body">
                              <div class="timeline-header">
                                 <span class="userimage"><img src="" alt=""></span>
                                 <span class="username"><p href="javascript:;">Your Wikis </p> <small></small></span>
                           
                              </div>
                              <div class="timeline-content">
                              <div class="row">
             <?php foreach ($allWikis as $wiki): ?>
               <div class="col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center">
                 
                  <div style="max-width: 23rem;" class="card">
                     <img src="<?= URL_DIR ?>public/assets/images/bkog.png" alt="gara" style="height: 9rem;" class="my-2 position-relative">
                     <div class="card-body">
                        <div class="card-head">
                        <h5 class="card-title fw-semibold text-center"><?= $wiki['titre'] ?></h5>
                        
                        <p class="card-text text-center text-truncate"><?= $wiki['contenu'] ?></p>
                        </div>
                     </div>
                  </div>
                  <button type="button" class="btn btn-danger">delete</button>                  </a>  </div>
            <?php endforeach; ?>
</div>
                              </div>
                             
                              </div>               
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

