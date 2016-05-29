<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	$id = $_REQUEST['id'];
	clsColor::Delete($id);
	Functions::Location("colores.php");
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>