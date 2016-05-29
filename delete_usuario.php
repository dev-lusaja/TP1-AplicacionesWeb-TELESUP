<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	$id = $_REQUEST['id'];
	clsUser::Delete($id);
	Functions::Location("usuarios.php");
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>