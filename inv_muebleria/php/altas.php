<?php 
require_once "Database.php"
	session_start();
	if ($_SESSION['user']==false)
	{	
	header("location:../php/")
	}
	
	$idart=$_POST['idarticulo'];
	$tiproduc=$_POST['tipoproduct'];
	$marc=$_POST['marcas']
	$tam=$_POST['tamanio'];
	$col=$_POST['colore'];
	$desc=$_POST['descripcione'];

	$link=mysql_connect($serv,$userr,$pass,$datab);
	if ($link == false)
	{
		die("ERROR: No se puede Conectar." . mysqli_connect_error());
	}

	else
	{
		$sql = "INSERT INTO tipo_articulo ('id_tipo','tipo','marca','tamano','color','descripcion') VALUES ('$idart','$tipoproduct','$marc','$tam','$col',$des);";

		if (mysqli_query($link,$sql))
		{
			header("altasProductos.html");
		}
	}
 ?>