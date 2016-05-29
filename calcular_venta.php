<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$id = $_REQUEST['id'];
	$sql = "SELECT precio FROM auto WHERE idAuto=$id";

	$mysql = new Mysql();
	$auto = $mysql->Query($sql);

	$type =	$_SESSION['type'];
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('auto', $auto);
	$templates->display('calcular_venta.html');
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>