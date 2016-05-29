<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$id = $_REQUEST['id'];
	$sql = "SELECT * FROM modelo WHERE CodigoModelo=$id";

	$mysql = new Mysql();
	$model = $mysql->Query($sql);

	$type =	$_SESSION['type'];
	
	$update_model = isset($_SESSION['update_model'])?$_SESSION['update_model']:false;
	unset($_SESSION['update_model']);

	$update_model_err = isset($_SESSION['update_model_error'])?$_SESSION['update_model_error']:false;
	unset($_SESSION['update_model_error']);
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('update_model', $update_model);
	$templates->assign('update_model_err', $update_model_err);
	$templates->assign('model', $model);
	$templates->display('editar_modelo.html');
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>