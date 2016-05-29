<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	$id = $_REQUEST['id'];
	clsModel::Delete($id);
	Functions::Location("modelos.php");
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>