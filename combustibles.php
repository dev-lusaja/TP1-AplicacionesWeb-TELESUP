<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$gases = clsGas::Get();

	$type =	$_SESSION['type'];
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('gases', $gases);
	$templates->display('combustibles.html');
} catch (Exception $e) {
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>