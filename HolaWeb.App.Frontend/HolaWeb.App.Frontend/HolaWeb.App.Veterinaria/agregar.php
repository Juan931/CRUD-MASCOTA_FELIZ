<?php 
include_once('conexion.php');
if (isset($_POST['add'])) {
	$database = new ConectarDB();
	$db = $database->open();
	try {
		$stmt = $db->prepare("INSERT INTO personas (Nombre, Telefono, Correo, Direccion) VALUES (:nombrecontacto, :celular, :email, :direccion)");
		$_SESSION['message']=($stmt->execute(array(':nombrecontacto'=>$_POST['nombrecontacto'],':celular'=>$_POST['celular'],':email'=>$_POST['email'],':direccion'=>$_POST['direccion']))) ? 'Contacto agregado correctamente' : 'Algo Salio mal, No se pudo agregar el contacto';
	} catch (PDOException $e) {
		$_SESSION['message']= $e->getMessage();
	}
	$database->close();
}else{
	$_SESSION['message']= 'Rellene el Formulario';

}
header('location: index.php');
