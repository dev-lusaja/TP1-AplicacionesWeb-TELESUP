<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$colors = clsColor::Get();

	$type =	$_SESSION['type'];
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('colors', $colors);
	$templates->display('colores.html');
} catch (Exception $e) {
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>