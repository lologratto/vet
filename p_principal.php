<?php
session_start();
if(!isset ($_SESSION['usuario'])){
    header("location:index.html");
}
$nomusuario=$_SESSION["usuario"];
?>
<title>GraVet</title>
<link href="templete/assets/img/vet_logo_chico.png" rel="icon">
<link href="templete/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="templete/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="templete/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="templete/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="templete/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="templete/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="templete/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="templete/assets/css/style.css" rel="stylesheet">
<?php
require "php/cabecera.php"
?>
<body>
<section id="services" class="services section-bg">
      

        <img src="templete/assets/img/vet4.jpg" width="50%" alt="">
        <img src="templete/assets/img/vet5.jpg" width="50%" alt="">

      
    </section><!-- End Services Section -->
  
</body>
<?php
require "php/pie2.php"
?>

