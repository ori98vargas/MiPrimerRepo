<?php
	require_once('./conexion.php'); 

	## Variables
	$cedula_pasante = $_POST['txtci'];
	$nombre_pasante = $_POST['txtfirstName'];
	$apellido_pasante= $_POST['txtlastName'];
	$fechaNac = $_POST['txtnac'];
	$correo = $_POST['txtcorreo'];
	$telefono = $_POST['txtphoneNumber'];
	$telefonoEmer = $_POST['txtemergencia'];
	$direccion = $_POST['txtplace'];
	$discapacidad = $_POST['txtdiscapacidad'];
	$nombre_nivel_estudio = $_POST['txtestudio'];
	$nombre_instituto = $_POST['txtinstituto'];

	## Query
	$insertar = "INSERT into pasante2 values ('$cedula_pasante', '$nombre_pasante', '$apellido_pasante', '$fechaNac', '$correo', '$telefono', '$telefonoEmer', '$direccion', '$discapacidad', '$nombre_nivel_estudio', '$nombre_instituto')";

	$resultado = mysqli_query( $conexion, $insertar) or die ("error al insertar los registros");

	mysqli_close( $conexion );
	echo "<script>window.location = '../pasante.php';</script>"; 
?>





