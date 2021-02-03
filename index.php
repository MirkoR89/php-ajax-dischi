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
       <!-- Album PHP section -->
       <section class="container">
         <div class="album d-flex justify-content-start flex-wrap">
           <?php foreach ($albums as $album) { ?>
             <div class="card m-3" style="width: 14rem;">
               <img src="<?php echo $album['poster']; ?>" class="card-img-top" alt="album cover">
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

       <hr>

       <!-- Album JS section -->
       <section class="container" id="app">
         <div class="album d-flex justify-content-start flex-wrap">
             <div v-for='album in albumList' class="card m-3" style="width: 14rem;">
               <img :src="album.poster" class="card-img-top" alt="album cover">
               <div class="card-body">
                 <h5 class="card-title">{{album.title}}</h5>
                 <h6 class="card-subtitle mb-2 text-muted">{{album.author}}</h6>
                  <div class="album_details mt-3">
                    <span>{{album.year}}</span>
                    <span>{{album.genre}}</span>
                  </div> 
                </div>
            </div>
         </div>
       </section>
     </main>
     <!-- Axios CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
     <!-- Vue CND -->
     <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
     <!-- Link file JS -->
     <script src="dist/js/app.js" charset="utf-8"></script>
   </body>
 </html>
