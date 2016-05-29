<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$id = $_REQUEST['id'];
	$sql = "SELECT * FROM marca WHERE codigoMarca=$id";

	$mysql = new Mysql();
	$brand = $mysql->Query($sql);

	$type =	$_SESSION['type'];
	
	$update_brand = isset($_SESSION['update_brand'])?$_SESSION['update_brand']:false;
	unset($_SESSION['update_brand']);

	$update_brand_err = isset($_SESSION['update_brand_error'])?$_SESSION['update_brand_error']:false;
	unset($_SESSION['update_brand_error']);
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('update_brand', $update_brand);
	$templates->assign('update_brand_err', $update_brand_err);
	$templates->assign('brand', $brand);
	$templates->display('editar_marca.html');
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>