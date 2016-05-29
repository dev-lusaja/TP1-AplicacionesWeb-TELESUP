<?php 
/**
* 
*/
class clsColor
{
	
	function __construct()
	{
		
	}

	public static function Get()
	{
		$sql = "SELECT * FROM color";

		$mysql = new Mysql();
		$colors = $mysql->Query($sql);
		return $colors;
	}

	public static function Insert($data)
	{

		clsColor::ValidateFileds($data);
		extract( clsColor::SetFields($data) );

		$sql = "INSERT INTO color (Des) VALUES ('$Descripcion')";
		
		$mysql = new Mysql();
		$color = $mysql->Query($sql);

		if (!$color) {
			throw new Exception("Se presento un error al insertar el nuevo color");
		}
	}

	public static function Update($data)
	{
		clsColor::ValidateFileds($data);
		extract( clsColor::SetFields($data) );

		$sql = "UPDATE color SET Des = '$Descripcion' WHERE CodigoColor = '$CodigoColor'";

		$mysql = new Mysql();
		$brand = $mysql->Query($sql);

		if (!$brand) {
			throw new Exception("Se presento un error al actualizar el color");
		}
	}

	public static function Delete($id)
	{
		Functions::validateVariable($id, 'integer');
		
		$sql = "DELETE FROM color WHERE CodigoColor = $id";
		
		$mysql = new Mysql();
		$brand = $mysql->Query($sql);

		if (!$brand) {
			throw new Exception("Se presento un error al eliminar el color");
		}
	}

	private static function SetFields($data)
	{

		$fields = array (
			'CodigoColor' => $data['CodigoColor'],
			'Descripcion' => $data['descripcion']
			);
		return $fields;
	}

	private static function ValidateFileds($data)
	{
		if ( $data['CodigoColor'] != null ) {
			Functions::validateVariable($data['CodigoColor'], 'integer');
		}
		Functions::validateVariable($data['descripcion'], 'string');
	}
}


?>