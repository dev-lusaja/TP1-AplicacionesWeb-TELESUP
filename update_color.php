<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	clsColor::Update($_POST);

	$id = $_POST['CodigoColor'];
	
	$message = 'Se actualizo de manera correcta el color.';
	$_SESSION['update_color'] = $message;
	Functions::Location("modificar_colores.php?id=$id");
} catch (Exception $e) {
	$_SESSION['update_color_error'] = $e->	getMessage();
	Functions::Location("modificar_colores.php?id={$_POST['CodigoColor']}");
}
?>