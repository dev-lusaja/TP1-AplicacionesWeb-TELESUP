<?php 

function __autoload($class_name) {

	if ( strtolower(substr($class_name, 0, 7)) == 'smarty_') {
    	include "libs/smarty/sysplugins/$class_name.php";
    	return;
	}
	if ( strtolower(substr($class_name, 0, 15)) == 'smartyexception') {
    	include "libs/smarty/sysplugins/$class_name.php";
    	return;
	}

	if ( strtolower(substr($class_name, 0, 6)) == 'smarty' ) {
    	include "libs/smarty/$class_name.php";
    	return;
	}

	// if (strtolower(substr($class_name, 0, 5)) == 'mysql') {
 //    	include "libs/clases/$class_name.class.php";
 //    	return;
	// }
	include "libs/clases/$class_name.php";
}
?>