<?php 
/**
* 
*/
class clsModel
{
	
	function __construct()
	{
		
	}

	public static function Get()
	{
		$sql = "SELECT * FROM modelo";

		$mysql = new Mysql();
		$models = $mysql->Query($sql);
		return $models;
	}

	public static function Insert($data)
	{

		clsModel::ValidateFileds($data);
		extract( clsModel::SetFields($data) );

		$sql = "
			INSERT INTO modelo (Descripcion) VALUES ('$Descripcion')";
		
		$mysql = new Mysql();
		$model = $mysql->Query($sql);

		if (!$model) {
			throw new Exception("Se presento un error al insertar el nuevo modelo");
		}
	}

	public static function Update($data)
	{

		clsModel::ValidateFileds($data);
		extract( clsModel::SetFields($data) );

		$sql = "UPDATE modelo SET Descripcion = '$Descripcion' WHERE CodigoModelo = '$CodigoModelo'";
		
		$mysql = new Mysql();
		$brand = $mysql->Query($sql);

		if (!$brand) {
			throw new Exception("Se presento un error al actualizar el modelo");
		}
	}

	public static function Delete($id)
	{
		Functions::validateVariable($id, 'integer');
		
		$sql = "DELETE FROM modelo WHERE CodigoModelo = $id";
		
		$mysql = new Mysql();
		$brand = $mysql->Query($sql);

		if (!$brand) {
			throw new Exception("Se presento un error al eliminar el modelo");
		}
	}

	private static function SetFields($data)
	{

		$fields = array (
			'CodigoModelo' => $data['CodigoModelo'],
			'Descripcion' => $data['descripcion']
			);
		return $fields;
	}

	private static function ValidateFileds($data)
	{
		if ( $data['CodigoModelo'] != null ) {
			Functions::validateVariable($data['CodigoModelo'], 'integer');
		}
		Functions::validateVariable($data['descripcion'], 'string');
	}
}


?>