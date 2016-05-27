<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	
	$type =	$_SESSION['type'];

	$comboData = Functions::ComboboxAutoData();

	$insert_car = isset($_SESSION['insert_car'])?$_SESSION['insert_car']:false;
	unset($_SESSION['insert_car']);

	$insert_car_err = isset($_SESSION['insert_car_error'])?$_SESSION['insert_car_error']:false;
	unset($_SESSION['insert_car_error']);


	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('insert_car', $insert_car);
	$templates->assign('insert_car_err', $insert_car_err);
	$templates->assign('combo_data', $comboData);
	$templates->display('registrar_auto.html');
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>