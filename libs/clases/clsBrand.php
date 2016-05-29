<?php 
/**
* 
*/
class clsBrand
{
	
	function __construct()
	{
		
	}

	public static function Get()
	{
		$sql = "SELECT * FROM marca";

		$mysql = new Mysql();
		$brands = $mysql->Query($sql);
		return $brands;
	}

	public static function Insert($data)
	{

		clsBrand::ValidateFileds($data);
		extract( clsBrand::SetFields($data) );

		$sql = "
			INSERT INTO marca (Descripcion) VALUES ('$Descripcion')";
		
		$mysql = new Mysql();
		$brand = $mysql->Query($sql);

		if (!$brand) {
			throw new Exception("Se presento un error al insertar la nuevo marca");
		}
	}

	public static function Update($data)
	{

		clsBrand::ValidateFileds($data);
		extract( clsBrand::SetFields($data) );

		$sql = "UPDATE marca SET Descripcion = '$Descripcion' WHERE codigoMarca = '$codigoMarca'";
		
		$mysql = new Mysql();
		$brand = $mysql->Query($sql);

		if (!$brand) {
			throw new Exception("Se presento un error al actualizar la marca");
		}
	}

	public static function Delete($id)
	{
		Functions::validateVariable($id, 'integer');
		
		$sql = "DELETE FROM marca WHERE codigoMarca = $id";
		
		$mysql = new Mysql();
		$brand = $mysql->Query($sql);

		if (!$brand) {
			throw new Exception("Se presento un error al eliminar la marca");
		}
	}

	private static function SetFields($data)
	{

		$fields = array (
			'codigoMarca' => $data['codigoMarca'],
			'Descripcion' => $data['descripcion']
			);
		return $fields;
	}

	private static function ValidateFileds($data)
	{
		if ( $data['codigoMarca'] != null ) {
			Functions::validateVariable($data['codigoMarca'], 'integer');
		}
		Functions::validateVariable($data['descripcion'], 'string');
	}
}


?>