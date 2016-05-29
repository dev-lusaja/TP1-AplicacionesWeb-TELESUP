<?php 
/**
* 
*/
class clsGas
{
	
	function __construct()
	{
		
	}

	public static function Get()
	{
		$sql = "SELECT * FROM combustible";

		$mysql = new Mysql();
		$combustibles = $mysql->Query($sql);
		return $combustibles;
	}

	public static function Insert($data)
	{

		clsGas::ValidateFileds($data);
		extract( clsGas::SetFields($data) );

		$sql = "INSERT INTO combustible (desCom) VALUES ('$Descripcion')";
		
		$mysql = new Mysql();
		$combustible = $mysql->Query($sql);

		if (!$combustible) {
			throw new Exception("Se presento un error al insertar el nuevo combustible");
		}
	}

	public static function Update($data)
	{
		clsGas::ValidateFileds($data);
		extract( clsGas::SetFields($data) );

		$sql = "UPDATE combustible SET desCom = '$Descripcion' WHERE codCombustible = '$codCombustible'";

		$mysql = new Mysql();
		$brand = $mysql->Query($sql);

		if (!$brand) {
			throw new Exception("Se presento un error al actualizar el combustible");
		}
	}

	public static function Delete($id)
	{
		Functions::validateVariable($id, 'integer');
		
		$sql = "DELETE FROM combustible WHERE codCombustible = $id";
		
		$mysql = new Mysql();
		$brand = $mysql->Query($sql);

		if (!$brand) {
			throw new Exception("Se presento un error al eliminar el combustible");
		}
	}

	private static function SetFields($data)
	{

		$fields = array (
			'codCombustible' => $data['codCombustible'],
			'Descripcion' => $data['descripcion']
			);
		return $fields;
	}

	private static function ValidateFileds($data)
	{
		if ( $data['codCombustible'] != null ) {
			Functions::validateVariable($data['codCombustible'], 'integer');
		}
		Functions::validateVariable($data['descripcion'], 'string');
	}
}


?>