<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$id = $_REQUEST['id'];
	$sql = "SELECT * FROM usuario WHERE idUsuario=$id";

	$mysql = new Mysql();
	$usuario = $mysql->Query($sql);

	$combo_user = clsUser::Types();

	$type =	$_SESSION['type'];
	
	$update_usuario = isset($_SESSION['update_usuario'])?$_SESSION['update_usuario']:false;
	unset($_SESSION['update_usuario']);

	$update_usuario_err = isset($_SESSION['update_usuario_error'])?$_SESSION['update_usuario_error']:false;
	unset($_SESSION['update_usuario_error']);
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('update_usuario', $update_usuario);
	$templates->assign('update_usuario_err', $update_usuario_err);
	$templates->assign('usuario', $usuario);
	$templates->assign('combo_user', $combo_user);
	$templates->display('editar_usuario.html');
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>