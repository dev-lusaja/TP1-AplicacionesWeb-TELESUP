<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();
	clsCar::Insert($_POST);
	
	Functions::Location("autos.php");
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>