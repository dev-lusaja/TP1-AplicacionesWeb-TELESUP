<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	clsCar::Update($_POST);

	$id = $_POST['idAuto'];
	
	$message = 'Se actualizo de manera correcta el auto.';
	$_SESSION['update_car'] = $message;
	Functions::Location("modificar_autos.php?id=$id");
} catch (Exception $e) {
	$id = $_POST['idAuto'];
	$_SESSION['update_car_error'] = $e->getMessage();
	Functions::Location("modificar_autos.php?id=$id");
}
?>