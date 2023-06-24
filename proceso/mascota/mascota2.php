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
<!DOCTYPE html>
<html>
<head>
<style>
    /* Estilos para los input */
    input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    /* Estilos para los input de tipo "text" */
    input[type="text"] {
      /* Agrega estilos adicionales específicos para el tipo de input "text" */
    }

    
    /* Estilos para los input de tipo "submit" */
    input[type="submit"] {
      /* Agrega estilos adicionales específicos para el tipo de input "submit" */
    }
  </style>

<?php
require "../../php/conexion.php";
$id = $_GET['id_mascota'];
$F=$_GET['funcion'];

 

if ($F !="A"){
    // modificar y borrar
    $q="select * from mascotas where id_mascota=$id";

    $r=mysqli_query($con, $q);
    while($datos=mysqli_fetch_array($r)){
    ?>
    <?php
    echo ( "<center>");
    echo(" <form action='mascota3.php' method='GET'>");
    echo("<label for='exampleInputEmail1' class='form-label' style='color: white;'> N° ID </label>");
         echo(  " <input type='text' name='id_mascota' readonly value=".$datos['id_mascota'].">");
          echo(  "<br>");
          echo("<label for='exampleInputEmail1' class='form-label' style='color: white;'>NOMBRE</label>");
          echo( " <input type='text' name='nombre' placeholder='nombre' value=".$datos['nombre'].">");
          echo(  "<br>");
          echo("<label for='exampleInputEmail1' class='form-label' style='color: white;'>FECHA DE NACIMIENTO</label>");
           echo( "<input type='text' name='fecha' placeholder='direccion' value=".$datos['fecha_nac'].">");
           echo(  "<br>");
           echo("<label for='exampleInputEmail1' class='form-label' style='color: white;'>CLIENTE</label>");
           echo("<select id='cliente' name='cliente'>");
           require "../../php/conexion.php";
           $q="select * from clientes order by nombrec";
           $r=mysqli_query($con, $q);
           while($valores=mysqli_fetch_array($r)){
            echo("<option value=". $valores['id_cliente'].">". $valores['nombrec']."</option>");
           }
           echo("</select>");
           echo(  "<br>");
           echo("<label for='exampleInputEmail1' class='form-label' style='color: white;'>TIPO</label>");
           echo("<select id='tipo' name='tipo'>");
           require "../../php/conexion.php";
           $q="select * from tipos order by tipo";
           $r=mysqli_query($con, $q);
           while($valores=mysqli_fetch_array($r)){
            echo("<option value=". $valores['id_tipo'].">". $valores['tipo']."</option>");
           }
           echo("</select>");
           echo(  "<br>");
           echo("<label for='exampleInputEmail1' class='form-label' style='color: white;'>RAZA</label>");
           echo("<select id='raza' name='raza'>");
           require "../../php/conexion.php";
           $q="select * from razas order by raza";
           $r=mysqli_query($con, $q);
           while($valores=mysqli_fetch_array($r)){
            echo("<option value=". $valores['id_raza'].">". $valores['raza']."</option>");
           }
           echo("</select>");
           echo(  "<br>");
           echo("<input type='hidden' name='funcion' value=".$F.">");
           
           echo( "<input type='submit' value='modificar'>");
           
    echo ("</form>");
    }
}
else{ 
    echo ( "<center>");
    echo(" <form action='mascota3.php' method='GET'>");

   // echo(  " <input type='text' name='id_cliente' readonly value=".$datos['id_mascota'].">");
    echo( " <input type='text' name='nombre' placeholder='nombre' >");
    echo(  "<br>");
     echo( "<input type='text' name='fecha' placeholder='fecha de nacimiento' >");
     echo(  "<br>");
     echo("<label for='exampleInputEmail1' class='form-label' style='color: white;'>CLIENTE</label>");
     echo("<select id='cliente' name='cliente'>");
     require "../../php/conexion.php";
     $q="select * from clientes order by nombrec";
     $r=mysqli_query($con, $q);
     while($valores=mysqli_fetch_array($r)){
      echo("<option value=". $valores['id_cliente'].">". $valores['nombrec']."</option>");
     }
     echo("</select>");
     echo(  "<br>");
     echo("<label for='exampleInputEmail1' class='form-label' style='color: white;'>TIPO</label>");
     echo("<select id='tipo' name='tipo'>");
     require "../../php/conexion.php";
     $q="select * from tipos order by tipo";
     $r=mysqli_query($con, $q);
     while($valores=mysqli_fetch_array($r)){
      echo("<option value=". $valores['id_tipo'].">". $valores['tipo']."</option>");
     }
     echo("</select>");
     echo(  "<br>");
     echo("<label for='exampleInputEmail1' class='form-label' style='color: white;'>RAZA</label>");
     echo("<select id='raza' name='raza'>");
     require "../../php/conexion.php";
     $q="select * from razas order by raza";
     $r=mysqli_query($con, $q);
     while($valores=mysqli_fetch_array($r)){
      echo("<option value=". $valores['id_raza'].">". $valores['raza']."</option>");
     }
     echo("</select>");
     echo(  "<br>");
     echo("<input type='hidden' name='funcion' value=".$F.">");
     
     echo( "<input type='submit' value='modificar'>");
     
echo ("</form>");

}
?>
<?php 
require "../../php/pie.php"
?>