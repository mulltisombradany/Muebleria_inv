<?php
	require_once"Database.php"
		session_start();
		if ($_SESSION['usuario']==false)
		{
			header("location:...");
		}
	$id=$_POST['username'];
	$pass=$_POST['password'];

	$conexion=mysql_connect($serv,$user,$pass,$datab);
	$consulta="Select * from usuarios where usuario='$id' and contrasena='$pass';";

	$resultad=mysqli_query($conexion,$consulta);
	$filas=mysql_fetch_array($resultad);

	if (!$filas['usuario'])
	{
		echo "Inicio de Sesion fallido";
	}
	else
	{
		$_SESSION['user']=$filas['usuario'];
		header("location:...");
	}

	mysqli_free_result($resultad);
	mysqli_close($conexion);
?>