<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$users = clsUser::Get();
	$combo_user = clsUser::Types();
	$type =	$_SESSION['type'];
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('users', $users);
	$templates->assign('combo_user', $combo_user);
	$templates->display('usuarios.html');
} catch (Exception $e) {
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>