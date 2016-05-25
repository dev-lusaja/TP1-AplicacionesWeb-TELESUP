<?php 
try {
	require('libs/autoload.php');
	$templates = new Templates();
	$templates->display('index.html');
} catch (Exception $e) {
	echo $e->getMessage();
}
?>