<?php
session_start();
if(!isset ($_SESSION['usuario'])){
    header("location:index.html");
}
$nomusuario=$_SESSION["usuario"];
?>
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
<h1>Hola</h1>
<?php
require "php/pie.php"
?>

