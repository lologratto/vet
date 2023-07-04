<?php 
require "../../php/cabecera2.php"
?>

<title>GraVet</title>
<link href="../../templete/assets/img/vet_logo_chico.png" rel="icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href="../../templete/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../templete/assets/css/style.css" rel="stylesheet">

<body style=" background: white">
  

<div class="container text-center">
        <div class="row">
          <div class="col">
            
          </div>
          <div  style="border-radius: 50px;" class="col border border-danger border-5" >
            <h1>Clientes</h1>
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>
      
          
        <div ><a href="cliente2.php?id_cliente=0&funcion=A"><img src="../../img/mas.png" width="50" alt=""></a></div>
        
         
         </div >
        

        <table class="table table-bordered border-white table-dark table-hover" border="2px">
        <thead class="m-1">
      
        <div class="container">
        <thead>
          <tr>
            <th scope="col">funciones</th>
            
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
          </tr>
        </thead>
        <tbody>
  <?php
  require "../../php/conexion.php";
  $q="select * from clientes";
  $r=mysqli_query($con, $q);
 
  while( $datos=mysqli_fetch_array($r)){
    echo("<tr>");
    echo("<td scope='row'> <a href='cliente2.php?id_cliente=".$datos['id_cliente']."&funcion=M' ><img src='../../img/dibujo (1).png' alt='' ></a>
  
  <a href='cliente2.php?id_cliente=".$datos['id_cliente']."&funcion=B'><img src='../../img/borrar (3).png' alt=''></a>
  
  <td>". $datos['nombrec']."</td><td>".$datos['direccion']."</td><td>".$datos['te']."</td>");
   echo("</tr>");
   


  }
  
  ?>
  </tbody>
  </table>
  </div>
</body>

<?php 
require "../../php/pie.php"
?>