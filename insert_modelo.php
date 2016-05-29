<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	clsModel::Insert($_POST);
	
	$message = 'Se inserto de manera correcta el modelo.';
	$_SESSION['insert_model'] = $message;
	Functions::Location("modelos.php");
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>