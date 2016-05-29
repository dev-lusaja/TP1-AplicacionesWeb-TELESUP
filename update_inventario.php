<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	clsInventario::Update($_POST);

	$id = $_POST['idAuto'];
	
	$message = 'Se actualizo de manera correcta la marca.';
	$_SESSION['update_inventario'] = $message;
	Functions::Location("modificar_inventario.php?id=$id");
} catch (Exception $e) {
	$_SESSION['update_inventario_error'] = $e->getMessage();
	Functions::Location("modificar_inventario.php?id={$_POST['codigoMarca']}");
}
?>