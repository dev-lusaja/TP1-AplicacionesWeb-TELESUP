<?php 
try {
	require('libs/autoload.php');
	Functions::SessionDestroy();
	Functions::Location('index.php');
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('index.html');
}
?>