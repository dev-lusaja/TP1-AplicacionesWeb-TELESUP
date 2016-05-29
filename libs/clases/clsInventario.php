<?php 
/**
* 
*/
class clsInventario
{
	
	function __construct()
	{
		
	}

	public static function Update($data)
	{

		clsInventario::ValidateFileds($data);
		extract( clsInventario::SetFields($data) );

		$sql = "
			UPDATE auto SET cantidad = '$cantidad' WHERE idAuto = '$idAuto'";
		
		$mysql = new Mysql();
		$car = $mysql->Query($sql);

		if (!$car) {
			throw new Exception("Se presento un error al actualizar el auto");
		}
	}

	private static function SetFields($data)
	{

		$fields = array (
			'idAuto' => $data['idAuto'],
			'cantidad' => $data['cantidad']
			);
		return $fields;
	}

	private static function ValidateFileds($data)
	{
		if ( $data['idAuto'] != null ) {
			Functions::validateVariable($data['idAuto'], 'integer');
		}
		Functions::validateVariable($data['cantidad'], 'integer');
	}
}


?>