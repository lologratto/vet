<?php
require "../../php/conexion.php";

$u=$_GET['nombre'];
$n=$_GET['direccion'];
$id=$_GET['id_cliente'];
$F=$_GET['funcion'];
$c=$_GET['telefono'];



if($F=="A"){
    
    $q="insert into clientes (nombrec, direccion, te) values ('$u', '$n', '$c') ";
}
elseif($F=="M"){
    $q="update clientes set nombrec='$u', direccion='$n' where id_cliente=$id";
}
else
{
    $q="delete from clientes where id_cliente=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:cliente.php");

?>