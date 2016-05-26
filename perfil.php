<?php 
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	$templates = new clsTemplates();
	$type = $_SESSION['type'];
	$templates->assign('menu_type', $type);
	$templates->display('perfil.html');
} catch (Exception $e) {
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>