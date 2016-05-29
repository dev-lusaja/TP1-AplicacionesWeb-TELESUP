<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$models = clsModel::Get();

	$type =	$_SESSION['type'];
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('models', $models);
	$templates->display('modelos.html');
} catch (Exception $e) {
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>