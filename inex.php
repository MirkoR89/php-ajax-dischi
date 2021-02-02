<?php
  include __DIR__ '../dist/php/db.php';
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
       <section>
         <div class="album container">
           <div class="card" style="width: 18rem;">
             <img src="<?php  foreach ($albums as $album) {
               echo $album['poster'];
             }?>" class="card-img-top" alt="...">
             <div class="card-body">
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             </div>
          </div>
         </div>
       </section>
     </main>
   </body>
 </html>
