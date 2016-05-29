<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$id = $_REQUEST['id'];
	$sql = "SELECT * FROM color WHERE CodigoColor=$id";

	$mysql = new Mysql();
	$color = $mysql->Query($sql);

	$type =	$_SESSION['type'];
	
	$update_color = isset($_SESSION['update_color'])?$_SESSION['update_color']:false;
	unset($_SESSION['update_color']);

	$update_color_err = isset($_SESSION['update_color_error'])?$_SESSION['update_color_error']:false;
	unset($_SESSION['update_color_error']);
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('update_color', $update_color);
	$templates->assign('update_color_err', $update_color_err);
	$templates->assign('color', $color);
	$templates->display('editar_color.html');
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>