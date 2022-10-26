<?php include 'includes/connection.php' ?>
<?php session_start(); ?>
<?php /* if($_SESSION['ruolo'] != 'admin'){
  header('Location: index.php');
} */
if(!isset($_SESSION['utente'])){
  header('Location: index.php');
}
?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home - Area riservata</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    span.h1 {
      color: #fff;
    }
  </style>
</head>

<body>



  <!-- As a heading -->
  <nav class="navbar navbar-dark bg-dark">
    <span class="h1" class="navbar-brand ms-3">Sito dei siti.com</span>
    <span>
      <a class="btn btn-danger me-3" href="logout.php">
        Logout
      </a>
    </span>
  </nav>

  <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="height:80vh; background-size: cover; background-image: url(https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-0.3.5&s=c3d0603820b595592d80f5a239938c67&auto=format&fit=crop&w=1500&q=80);">

    <div class="container-fluid">
      <div class="row  justify-content-center align-items-center d-flex text-center h-100">
        <div class="col-12 col-md-8  h-50 ">
          <h1 class="display-2  text-light mb-2 mt-5"><strong>La tua area riservata</strong> </h1>
          <p class="lead  text-light mb-5"> Benvenuto/a <span style="color: #ff6d05 ; font: italic small-caps bold 20px/30px Georgia, serif;"> <?= $_SESSION['utente']; ?></span> esplora i contenuti a te dedicati</p>
          <div class="btn-container-wrapper p-relative d-block  zindex-1">
            <i class="fa fa-angle-down fa-4x text-light"></i>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <div class="container align-items-center mt-5">
    <div class="row justify-content-center align-items-center text-center">
      <h2 class="mb-5">Fantastici paesaggi</h2>
      <div class="card col-4 me-5" style="width: 20rem; height: 17rem;">
        <img src="img/Night Time Mountains Flat Landscape.jfif" class="card-img-top" alt="immagine bella" style="height: 168px ;">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card col-4 me-5" style="width: 20rem;">
        <img src="img/HD Desktop Wallpaper.jpg" class="card-img-top" alt="immagine bella">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card col-4" style="width: 20rem;">
        <img src="img/helix-nebula-galaxy-universe-stars-space-blue-1514565-wallhere.com.jpg" class="card-img-top" alt="immagine bella">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>





  <!-- JS/jQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>