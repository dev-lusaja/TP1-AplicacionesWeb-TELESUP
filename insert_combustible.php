<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	clsGas::Insert($_POST);
	
	$message = 'Se inserto de manera correcta el combustible.';
	$_SESSION['insert_gas'] = $message;
	Functions::Location("combustibles.php");
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>