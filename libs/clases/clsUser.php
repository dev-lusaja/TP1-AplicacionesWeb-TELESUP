<?php 
/**
* 
*/
class clsUser
{
	
	function __construct()
	{
		
	}

	public static function Get()
	{
		$sql = "
				SELECT u.*, tu.tipo FROM usuario u
				JOIN tipo_usuario tu ON (tu.CodTipo = u.Tipo_Usuario_CodTipo)";

		$mysql = new Mysql();
		$users = $mysql->Query($sql);
		return $users;
	}

	public static function Insert($data)
	{

		clsUser::ValidateFileds($data);
		extract( clsUser::SetFields($data) );

		$sql = "INSERT INTO usuario (Tipo_Usuario_CodTipo, Nombre_Usuario, Clave) VALUES ('$tipo_usuario', '$usuario', '$clave')";
		
		$mysql = new Mysql();
		$usuario = $mysql->Query($sql);

		if (!$usuario) {
			throw new Exception("Se presento un error al insertar el nuevo usuario");
		}
	}

	public static function Update($data)
	{
		clsUser::ValidateFileds($data);
		extract( clsUser::SetFields($data) );

		$sql = "UPDATE usuario SET Tipo_Usuario_CodTipo = '$tipo_usuario', Nombre_Usuario = '$usuario', Clave = '$clave' WHERE idUsuario = '$idUsuario'";

		$mysql = new Mysql();
		$usuario = $mysql->Query($sql);

		if (!$usuario) {
			throw new Exception("Se presento un error al actualizar el usuairo");
		}
	}

	public static function Delete($id)
	{
		Functions::validateVariable($id, 'integer');
		
		$sql = "DELETE FROM usuario WHERE idUsuario = $id";
		
		$mysql = new Mysql();
		$brand = $mysql->Query($sql);

		if (!$brand) {
			throw new Exception("Se presento un error al eliminar el usuario");
		}
	}

	public static function Types()
	{
		$sql = "SELECT * FROM tipo_usuario";
		$mysql = new Mysql();
		$types = $mysql->Query($sql);

		if (!$types) {
			throw new Exception("no se encontraron tipos de usuario");
		}
		return $types;
	}

	private static function SetFields($data)
	{

		$fields = array (
			'idUsuario' => $data['idUsuario'],
			'tipo_usuario' => $data['tipo_usuario'],
			'usuario' => $data['usuario'],
			'clave' => $data['clave'],
			);
		return $fields;
	}

	private static function ValidateFileds($data)
	{
		if ( $data['idUsuario'] != null ) {
			Functions::validateVariable($data['idUsuario'], 'integer');
		}
		Functions::validateVariable($data['usuario'], 'string');
		Functions::validateVariable($data['clave'], 'string');
		Functions::validateVariable($data['tipo_usuario'], 'integer');
	}
}


?>