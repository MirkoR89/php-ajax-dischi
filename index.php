<?php
  include __DIR__ . '/database/db.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Php Dischi</title>
     <!-- Bootstrap CND -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <!-- Link CSS -->
     <link rel="stylesheet" href="dist/css/style.css">
   </head>
   <body>
     <!-- Header site -->
     <header>
       <!-- Navbar -->
       <nav class="navbar navbar-light">
          <a class="container navbar-brand" href="#">
            <img src="dist\img\logo.png" width="50" height="50" alt="Spotify logo">
          </a>
       </nav>
     </header>

     <!-- Main site -->
     <main>
       <!-- Album section -->
       <section class="container">
         <div class="album d-flex justify-content-start flex-wrap">
           <?php foreach ($albums as $album) { ?>
             <div class="card m-3" style="width: 14rem;">
               <img src="<?php echo $album['poster']; ?>" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title"><?php echo $album['title'];  ?></h5>
                 <h6 class="card-subtitle mb-2 text-muted"><?php echo $album['author'];  ?></h6>
                  <div class="album_details mt-3">
                    <span><?php echo $album['year'];  ?></span>
                    <span><?php echo $album['genre'];  ?></span>
                  </div> 
                </div>
            </div>
          <?php } ?>
         </div>
       </section>
     </main>
   </body>
 </html>
