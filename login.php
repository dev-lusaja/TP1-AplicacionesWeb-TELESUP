<?php 
try {
	require('libs/autoload.php');
	$templates = new Templates();
	$mysql = new Mysql();

	$usuario = $_POST['inputUsuario'];
	$clave = $_POST['inputClave'];
	$tipo = $_POST['tipoUsuario'];
	$sql = "select * from usuario where Nombre_Usuario='$usuario' and Clave='$clave' and Tipo_Usuario_CodTipo = $tipo";
	$res = $mysql->Query($sql);

	if (count($res) == 0) {
		throw new Exception("Datos incorrectos");
	}
	
	$templates->assign( 'message', 'login' );
	$templates->display('error.html');
} catch (Exception $e) {
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>