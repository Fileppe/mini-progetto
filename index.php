<?php
include 'includes/connection.php'; ?>
<!-- <?php
$avviso = "";
if (isset($_POST['login'])) {

  $mail = $_POST['mail'];
  $password = $_POST['password'];
  if (!empty($mail) && !empty($password)) {
    $avviso = " <div class='container text-center bg-success'>Stai per essere reindrizzato alla pagina di login!</div>";
  }else{
    $avviso = " <div class='container text-center bg-danger'>Tutti i campi devono essere compilati!</div>";
  }
}
?> -->
<!doctype html>
<html lang="it">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mini Progetto</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<style>
  body{
    background-image: url(img/spazio.jpg);
    background-position: center;
    background-size: cover;
  }
</style>
<body>
  <div class="login-popup-wrap new_login_popup mt-5">
    <div class="login-popup-heading text-center">
      <h4><i class="fa fa-user" aria-hidden="true"></i> Login </h4>
    </div>
    <form id="loginMember" role="form" action="login.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control mb-3" id="mail" placeholder="e-mail" name="mail" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
      </div>
      <button type="submit" class="btn btn-default login-popup-btn" name="login" value="1">Login</button>
      <!-- <?= $avviso ?> -->
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>