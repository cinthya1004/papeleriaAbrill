<!doctype html>
<html>
<head>
<tittle> <center><h1>PAPELERIA "ABRIL"</h1></center></tittle><br>
<center><img src="logo.png" height="60" width="160"></center>
</head>
 <a href="http://localhost/papeleria/venta/venta.php"><button><h2>Regresar</h2></button></a>
<meta charset="utf-8"><br><br><br>
<title>Editar Registros Tabla Articulos</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:65%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>
<body>
<div class="main-wrapper">
<h1>Editar Registros con Función PHP </h1>
<br><br>
<?php 
include("function.php");
$id = $_GET['id'];
select_id('articulos','id',$id);
?>
<form action="" method="post">
	<input type="text" value="<?php echo $row->nombre;?>" name="nombre">
	<input type="text" value="<?php echo $row->color;?>" name="color">
	<input type="text" value="<?php echo $row->marca;?>" name="marca">
	<input type="int" value="<?php echo $row->precio;?>" name="precio">
	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
		$field = array("nombre"=>$_POST['nombre'], "color"=>$_POST['color'], "marca"=>$_POST['marca'], "precio"=>$_POST['precio']);
		$tbl = "articulos";
		edit($tbl,$field,'id',$id);
		header("location:venta.php");

	}
?>
</div>

</body>
</html>