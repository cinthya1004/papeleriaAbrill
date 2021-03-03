<?php 
include("function.php");
$id = $_GET['id'];
delete('articulos','id',$id);
header("location:venta.php");
?>