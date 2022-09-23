<?php
include_once("Script/_head.php");

$provinces = $province->ListeProvince();
$ligues=$ligue->ListeLigue();
$clubs=$club->ListeClub();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FCHandball - Competitions</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <?php 
  include("menu.php");
  ?>

  <main id="main" style="margin-top: 250px; margin-bottom: 100px">

    <div class="container offset-3">

    <div class="col-lg-9 ml-1 mt-5" id="main_menu">
 <!-- ======= About Section ======= -->
    <div class="athlète mt-5">
       <hr>
        <div class="section-title" data-aos="fade-left">
          <h6>Connexion</h6>
        </div>

        <form class="form-inline" method="post" action="Script/User.php">     
            <div class="input-group mb-2 mr-2">
              <div class="input-group-prepend">
                <div class="input-group-text"> <i class="bx bx-mail-send"></i></div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroup" name="EmailUtilisateur" placeholder="Votre email...">

            </div>

            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"> <i class="bx bx-lock"></i></div>
              </div>
              <input type="password" class="form-control" id="inlineFormInputGroup" name="PassWordUtilisateur" placeholder="Votre mot de passe...">

            </div>

            <div class="input-group mb-2">
              <button class="btn btn-outline-success ml-2" name="login" type="submit">Se connecter</button>
            </div>
            
            
        </form>

      <hr>
      </div>
       


     

    </div>

     
     
      </div>
  </main><!-- End #main -->

  <?php
    include("footer.php");
  ?>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>