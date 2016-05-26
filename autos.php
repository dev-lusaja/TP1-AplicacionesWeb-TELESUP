<?php
try {
	require('libs/autoload.php');

	$mysql = new Mysql();
	$sql = "
		SELECT a.idAuto, a.imagen as producto,a.cantidad ,CONCAT(m.Descripcion, ' ' , mo.Descripcion, ' '	, a.Ano_fabricacion, ' ', a.Traccion) as descripcion, a.precio  FROM auto a
		inner join marca m on (m.codigoMarca = a.Marca_codigoMarca)
		inner join modelo mo on (mo.codigoModelo = a.Modelo_CodigoModelo)";

	$autos = $mysql->Query($sql);

	$templates = new clsTemplates();
	session_start();
	$type =	$_SESSION['type'];
	$templates->assign('menu_type', $type);
	$templates->assign('cars', $autos);
	$templates->display('autos.html');
} catch (Exception $e) {
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>