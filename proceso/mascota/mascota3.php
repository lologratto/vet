<?php
require "../../php/conexion.php";

$u=$_GET['nombre'];
$n=$_GET['fecha'];
$cl=$_GET['cliente'];
$t=$_GET['tipo'];
$r=$_GET['raza'];
$id=$_GET['id_mascota'];
$F=$_GET['funcion'];




if($F=="A"){
    
    $q="insert into mascotas (nombre, fecha_nac, id_cliente, id_tipo, id_raza) values ('$u', '$n', '$cl', '$t', '$r') ";
}
elseif($F=="M"){
    $q="update mascotas set nombre='$u', fecha_nac='$n', id_cliente='$cl', id_tipo='$t', id_cliente='$r'  where id_mascota=$id";
}
else
{
    $q="delete from mascotas where id_mascota=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:mascota.php");

?>