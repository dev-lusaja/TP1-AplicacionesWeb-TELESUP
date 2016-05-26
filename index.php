<?php
try {
	require('libs/autoload.php');
	$templates = new clsTemplates();
	$templates->assign( 'message', false );
	$templates->display('index.html');
} catch (Exception $e) {
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>