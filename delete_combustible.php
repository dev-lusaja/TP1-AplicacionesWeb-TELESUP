<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	$id = $_REQUEST['id'];
	clsGas::Delete($id);
	Functions::Location("combustibles.php");
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>