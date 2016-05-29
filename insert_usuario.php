<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	clsUser::Insert($_POST);
	
	$message = 'Se actualizo de manera correcta el usuario.';
	$_SESSION['insert_user'] = $message;
	Functions::Location("usuarios.php");
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>