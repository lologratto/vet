<?php require_once $_SERVER['DOCUMENT_ROOT']. "/vet/rutas.php"; ?>
<!-- ======= Header ======= -->
<header style="background: rgba(40, 58, 90, 0.9);" id="header" >
    <div class="container d-flex align-items-center">
  <img src="../../templete/assets/img/vet_logo.png" width="100px" alt="">
      <h1 class="logo me-auto"><a href="index.html">Veterinaria</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="<?php echo($raiz ."p_principal.php");?>">Inicio</a></li>
          <li><a class="nav-link scrollto" href="<?php echo($raiz ."proceso/cliente/cliente.php");?>" target="_blanck">Clientes</a></li>
          <li><a class="nav-link scrollto" href="#">Historias</a></li>
          <li><a class="nav-link scrollto" href="#">Raza</a></li>
          <li><a class="nav-link scrollto" href="#">Tipos</a></li> 
          <li><a class="nav-link scrollto" href="<?php echo($raiz ."proceso/mascota/mascota.php");?>">Masotas</a></li>
          
         
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->