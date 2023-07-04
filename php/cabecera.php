<?php require_once $_SERVER['DOCUMENT_ROOT']. "/vet/rutas.php"; ?>
<!-- ======= Header ======= -->
 <header style="background: rgba(40, 58, 90, 0.9);" id="header" >
    <div class="container d-flex align-items-center">
  <img src="templete/assets/img/vet_logo.png" width="100px" alt="">
      <h1 class="logo me-auto"><a href="index.html">Veterinaria</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="<?php echo($raiz ."proceso/cliente/cliente.php");?>" >Clientes</a></li>
          <li><a class="nav-link scrollto" href="#services">Historias</a></li>
          <li><a class="nav-link scrollto" href="#services">Raza</a></li>
          <li><a class="nav-link scrollto" href="#services">Tipos</a></li> 
          <li><a class="nav-link scrollto" href="<?php echo($raiz ."proceso/mascota/mascota.php");?>">Masotas</a></li>
          <a href="php/cerrarsesion.php"><button style="border-radius: 50px;" type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
            Cerrar Sesion
          </button></a>
           </a>
        
         
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->