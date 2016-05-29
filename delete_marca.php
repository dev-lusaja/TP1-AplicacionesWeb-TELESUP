<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	$id = $_REQUEST['id'];
	clsBrand::Delete($id);
	Functions::Location("marcas.php");
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>