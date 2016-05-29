<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	clsGas::Update($_POST);

	$id = $_POST['codCombustible'];
	
	$message = 'Se actualizo de manera correcta el combustible.';
	$_SESSION['update_gas'] = $message;
	Functions::Location("modificar_combustibles.php?id=$id");
} catch (Exception $e) {
	$_SESSION['update_gas_error'] = $e->getMessage();
	Functions::Location("modificar_combustibles.php?id={$_POST['codCombustible']}");
}
?>