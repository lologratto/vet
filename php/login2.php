<?php
require "conexion.php";
$u=$_GET['usuario'];
$c=$_GET['contraseña'];
$q="select * from usuarios where usuario= '$u' and contraseña='$c' ";
$r=mysqli_query($con, $q);
if(mysqli_num_rows($r)>0){
    session_start();
    $_SESSION['usuario']=$u;
  header('location:../p_principal.php');
}
else
{
    header('location:../index.html');
}

?>