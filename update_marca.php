<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	clsBrand::Update($_POST);

	$id = $_POST['codigoMarca'];
	
	$message = 'Se actualizo de manera correcta la marca.';
	$_SESSION['update_brand'] = $message;
	Functions::Location("modificar_marcas.php?id=$id");
} catch (Exception $e) {
	$_SESSION['update_brand_error'] = $e->getMessage();
	Functions::Location("modificar_marcas.php?id={$_POST['codigoMarca']}");
}
?>