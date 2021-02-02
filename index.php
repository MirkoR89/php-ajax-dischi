<?php
  include __DIR__ . '/php/db.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Php Dischi</title>
     <!-- Bootstrap CND -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   </head>
   <body>
     <!-- Header site -->
     <header>

     </header>

     <!-- Main site -->
     <main>
       <!-- Album section -->
       <section class="container">
         <div class="album d-flex justify-content-around flex-wrap">
           <?php foreach ($albums as $album) { ?>
             <div class="card" style="width: 18rem;">
               <img src="<?php echo $album['poster']; ?>" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title"><?php echo $album['title'];  ?></h5>
                 <h6 class="card-subtitle mb-2 text-muted"><?php echo $album['author'];  ?></h6>
               </div>
            </div>
          <?php } ?>
         </div>
       </section>
     </main>
   </body>
 </html>
