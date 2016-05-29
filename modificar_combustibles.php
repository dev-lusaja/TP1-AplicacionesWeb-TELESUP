<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$id = $_REQUEST['id'];
	$sql = "SELECT * FROM combustible WHERE codCombustible=$id";

	$mysql = new Mysql();
	$gas = $mysql->Query($sql);

	$type =	$_SESSION['type'];
	
	$update_gas = isset($_SESSION['update_gas'])?$_SESSION['update_gas']:false;
	unset($_SESSION['update_gas']);

	$update_gas_err = isset($_SESSION['update_gas_error'])?$_SESSION['update_gas_error']:false;
	unset($_SESSION['update_gas_error']);
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('update_gas', $update_gas);
	$templates->assign('update_gas_err', $update_gas_err);
	$templates->assign('gas', $gas);
	$templates->display('editar_combustible.html');
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>