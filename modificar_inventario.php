<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$id = $_REQUEST['id'];
	$sql = "SELECT idAuto, cantidad FROM auto WHERE idAuto=$id";

	$mysql = new Mysql();
	$auto = $mysql->Query($sql);

	$type =	$_SESSION['type'];
	
	$update_inventario = isset($_SESSION['update_inventario'])?$_SESSION['update_inventario']:false;
	unset($_SESSION['update_inventario']);

	$update_inventario_err = isset($_SESSION['update_inventario_error'])?$_SESSION['update_inventario_error']:false;
	unset($_SESSION['update_inventario_error']);
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('update_inventario', $update_inventario);
	$templates->assign('update_inventario_err', $update_inventario_err);
	$templates->assign('auto', $auto);
	$templates->display('editar_inventario.html');
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>