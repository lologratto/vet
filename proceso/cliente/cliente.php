<?php 
require "../../php/cabecera2.php"
?>
<head>
<title>GraVet</title>
<link href="../../templete/assets/img/vet_logo_chico.png" rel="icon">
<link href="../../templete/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href="../../templete/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../templete/assets/css/style.css" rel="stylesheet">
</head>
<body style=" background: #7b0abd;">
  

  <div class="container text-center" style="border: 1px #000;">
        <div class="row">
          <div class="col-8">
          <center> <h1 style="color: white;">Clientes</h1></center> 
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>
      <br>
      <div>
      <div class="caja3 text-center">
              <label style="color: white;" for="">tipo: </label>
        <input type="date" class="m-3">
        
        <a href="cliente2.php?id_cliente=0&funcion=A"><img src="../../img/mas.png" width="50" alt=""></a>
        <table class="table caja2" border="2px"> 
         </div >
        

        <table class="table caja2" border="2px">
        <thead class="m-1">
      
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
    echo("<td scope='row'> <a href='cliente2.php?id_cliente=".$datos['id_cliente']."&funcion=M'><img src='../../img/boton-editar.png' alt=''></a>
  
  <a href='cliente2.php?id_cliente=".$datos['id_cliente']."&funcion=B'><img src='../../img/borrar.png' alt=''></a>
  
  <td>". $datos['nombrec']."</td><td>".$datos['direccion']."</td><td>".$datos['te']."</td>");
   echo("</tr>");
   


  }
  
  ?>
  </tbody>
  </table>
</body>

<?php 
require "../../php/pie.php"
?>