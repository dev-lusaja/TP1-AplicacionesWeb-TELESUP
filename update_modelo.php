<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	clsModel::Update($_POST);

	$id = $_POST['CodigoModelo'];
	
	$message = 'Se actualizo de manera correcta el modelo.';
	$_SESSION['update_model'] = $message;
	Functions::Location("modificar_modelos.php?id=$id");
} catch (Exception $e) {
	$_SESSION['update_model_error'] = $e->getMessage();
	Functions::Location("modificar_modelos.php?id={$_POST['CodigoModelo']}");
}
?>