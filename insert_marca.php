<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	clsBrand::Insert($_POST);
	
	$message = 'Se actualizo de manera correcta el auto.';
	$_SESSION['insert_brand'] = $message;
	Functions::Location("marcas.php");
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>