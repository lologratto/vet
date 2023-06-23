
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
$id = $_GET['id_cliente'];
$F=$_GET['funcion'];

 

if ($F !="A"){
    // modificar y borrar
    $q="select * from clientes where id_cliente=$id";

    $r=mysqli_query($con, $q);
    while($datos=mysqli_fetch_array($r)){
    ?>
    <?php
    echo ( "<center>");
    echo(" <form action='cliente3.php' method='GET' class='mx-auto p-2' style='width: 200px;'>");
    echo("<label for='exampleInputEmail1' class='form-label' style='color: white;'> N° ID </label>");
         echo(  " <input type='text' name='id_cliente' readonly value=".$datos['id_cliente'].">");
          echo(  "<br>");
          echo("<label for='exampleInputEmail1' class='form-label' style='color: white;'>NOMBRE</label>");
          echo( " <input type='text' name='nombre' placeholder='nombre' value=".$datos['nombrec'].">");
          echo(  "<br>");
          echo("<label for='exampleInputEmail1' class='form-label' style='color: white;'>DIRECCION</label>");
           echo( "<input type='text' name='direccion' placeholder='direccion' value=".$datos['direccion'].">");
           echo(  "<br>");
           echo("<label for='exampleInputEmail1' class='form-label' style='color: white;'>TELEFONO</label>");
           echo("<input type='text' name='telefono' placeholder='telefono' value=".$datos['te'].">");
           echo(  "<br>");
           echo("<input type='hidden' name='funcion' value=".$F.">");
           
           echo( "<input type='submit' value='modificar'>");
           
    echo ("</form>");
    }
}
else{ 
    echo ( "<center>");
    echo(" <form action='cliente3.php' method='GET'>");

    
    echo( " <input type='text' name='nombre' placeholder='nombre' >");
    echo(  "<br>");
     echo( "<input type='text' name='direccion' placeholder='direccion' >");
     echo(  "<br>");
     echo("<input type='text' name='telefono' placeholder='telefono' >");
     echo(  "<br>");
     echo("<input type='hidden' readonly name='funcion' value=".$F.">");
     
     echo( "<input type='submit' value='agregar'>");
echo ("</form>");


}
?>
<?php 
require "../../php/pie.php"
?>
