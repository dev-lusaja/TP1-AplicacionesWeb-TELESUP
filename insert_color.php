<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	clsColor::Insert($_POST);
	
	$message = 'Se inserto de manera correcta el color.';
	$_SESSION['insert_color'] = $message;
	Functions::Location("colores.php");
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>