<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$autos = clsCar::Get();

	$type =	$_SESSION['type'];
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('cars', $autos);
	$templates->display('inventario.html');
} catch (Exception $e) {
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>