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
    echo(" <form action='cliente3.php' method='GET'>");
        
         echo(  " <input type='text' name='id_cliente' readonly value=".$datos['id_cliente'].">");
          echo(  "<br>");
          echo( " <input type='text' name='nombre' placeholder='nombre' value=".$datos['nombrec'].">");
          echo(  "<br>");
           echo( "<input type='text' name='direccion' placeholder='direccion' value=".$datos['direccion'].">");
           echo(  "<br>");
           echo("<input type='text' name='telefono' placeholder='telefono' value=".$datos['te'].">");
           echo(  "<br>");
           echo("<input type='text' name='funcion' value=".$F.">");
           echo(  "<br>");
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
     echo("<input type='text' readonly name='funcion' value=".$F.">");
     echo(  "<br>");
     echo( "<input type='submit' value='agregar'>");
echo ("</form>");


}