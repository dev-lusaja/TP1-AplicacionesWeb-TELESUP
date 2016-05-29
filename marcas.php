<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$brands = clsBrand::Get();

	$type =	$_SESSION['type'];
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('brands', $brands);
	$templates->display('marcas.html');
} catch (Exception $e) {
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>