<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$id = $_REQUEST['id'];
	$sql = "SELECT * FROM auto WHERE idAuto=$id";

	$mysql = new Mysql();
	$auto = $mysql->Query($sql);

	$comboData = Functions::ComboboxAutoData();

	$type =	$_SESSION['type'];
	
	$update_car = isset($_SESSION['update_car'])?$_SESSION['update_car']:false;
	unset($_SESSION['update_car']);

	$update_car_err = isset($_SESSION['update_car_error'])?$_SESSION['update_car_error']:false;
	unset($_SESSION['update_car_error']);
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('update_car', $update_car);
	$templates->assign('update_car_err', $update_car_err);
	$templates->assign('car', $auto);
	$templates->assign('combo_data', $comboData);
	$templates->display('editar_auto.html');
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>