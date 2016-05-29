<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	clsUser::Update($_POST);

	$id = $_POST['idUsuario'];
	
	$message = 'Se actualizo de manera correcta el usuario.';
	$_SESSION['update_usuario'] = $message;
	Functions::Location("modificar_usuarios.php?id=$id");
} catch (Exception $e) {
	$_SESSION['update_usuario_error'] = $e->getMessage();
	Functions::Location("modificar_usuarios.php?id={$_POST['idUsuario']}");
}
?>