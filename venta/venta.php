<!doctype html>
<html>
<head>
<meta charset="utf-8">
<tittle> <center><h1>PAPELERIA "ABRIL"</h1></center></tittle><br>
<center><img src="logo.png" height="60" width="160"></center>
</head>
<body style="background-color:skyblue;">
</body>
<a href="http://localhost/papeleria/inicio/"><button><h2>Inicio</h2></button></a>
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
	width:60%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
	margin:auto;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
h1{
	font-size:24px;
	}
</style>
</head>

<body>
<div class="main-wrapper">
<h1><center>Tabla Articulos </center></h1>
<br><br>
<form action="" method="post">
  <div class="col-xs-3">
    <input class="form-control" name="nombre" type="text" placeholder="Nombre">
  </div>
  <div class="col-xs-3">
    <input class="form-control" name="color" type="text" placeholder="Color">
  </div>  
   <div class="col-xs-3">
    <input class="form-control" name="marca" type="text" placeholder="Marca">
  </div>
  <div class="col-xs-3">
    <input class="form-control" name="precio" type="int" placeholder="Precio">
  </div> <br><br>
	<input type="submit" name="submit" class="btn btn-primary" value="Insertar">
</form>
<br>

<?php
	include("function.php");
	if(isset($_POST['submit'])){
		$field = array("nombre"=>$_POST['nombre'], "color"=>$_POST['color'], "marca"=>$_POST['marca'], "precio"=>$_POST['precio']);
		$tbl = "articulos";
		insert($tbl,$field);
		
	}
?>
<table border="1" width="100%">
	<tr>
		<th width="20%">Nombre</th>
		<th width="20%">Color</th>
		<th width="20%">Marca</th>
		<th width="15%">Precio</th>
		<th width="25%">Opcion</th>
	</tr>
<?php 
	$sql = "select * from articulos";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->nombre;?></td>
		<td><?php echo $row->color;?></td>
		<td><?php echo $row->marca;?></td>
		<td><?php echo $row->precio;?></td>
		<td>

<a class="btn btn-primary" href="editar.php?id=<?php echo $row->id; ?>"><i class="icon-edit" aria-hidden="true"></i>Editar</a>
<a class="btn btn-primary" href="borrar.php?id=<?php echo $row->id;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true">Eliminar</i></a>
</td>
	</tr>
	<?php } ?>
</table>
</div>
<h6><center> Papelería “Abril”<br>Dirección: Calle Alfredo Marín Tamayo<br>Colonia Bethel #201<br>Teléfono: 3060749<br>Horario suursal : 9:00am – 9:00pm </center></h6>
<br>
</body>
</html>