<?php
try {
	require('libs/autoload.php');
	Functions::SessionValidate();

	$id = $_REQUEST['id'];
	$sql = "
		SELECT a.*,m.Descripcion as 'marca', mo.Descripcion as 'modelo', c.Des as 'color', co.desCom as 'combustible'  FROM auto a 
		inner join marca m on (a.Marca_codigoMarca = m.codigoMarca)
		inner join modelo mo on (a.Modelo_CodigoModelo = mo.CodigoModelo)
		inner join color c on (a.Color_CodigoColor = c.CodigoColor)
		inner join combustible co on (a.Combustible_codCombustible = co.codCombustible)
		WHERE idAuto=$id";

	$mysql = new Mysql();
	$auto = $mysql->Query($sql);

	$type =	$_SESSION['type'];
	
	$templates = new clsTemplates();
	$templates->assign('menu_type', $type);
	$templates->assign('car', $auto);
	$templates->display('editar_auto.html');
} catch (Exception $e) {
	$templates->assign( 'message', $e->getMessage() );
	$templates->display('error.html');
}
?>