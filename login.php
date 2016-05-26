<?php
try {
	require('libs/autoload.php');

	$user = $_POST['inputUsuario'];
	$password = $_POST['inputClave'];
	$type = $_POST['tipoUsuario'];

	Functions::validateVariable($user, 'string');
	Functions::validateVariable($password, 'string');
	Functions::validateVariable($type, 'integer');

	$login = new clsLogin($user, $password, $type);
	Functions::Location('perfil.php');
} catch (Exception $e) {
	$templates = new clsTemplates();
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('index.html');
}
?>