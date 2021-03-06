<?php 

class Functions
{
	public static function validateVariable($valor, $tipo)
	{
		switch ($tipo) {
			case 'integer':
				$regex = '/^([0-9])+$/';
				if (!preg_match($regex, $valor)) {
					throw new Exception("El valor $valor no es un entero.");
				}
				break;
			case 'string':
				$regex = '/^([a-zA-Z0-9\.])+$/';
				if (!preg_match($regex, $valor)) {
					throw new Exception("El valor $valor no es una cadena.");
				}
				break;
			
			default:
				# code...
				break;
		}
	}

	public static function Location($url)
	{
		header("Location: $url");
	}

	public static function SessionStart()
	{
		session_start();
	}
	
	public static function SessionDestroy()
	{
		Functions::SessionStart();
		session_destroy();
		session_unset();
	}

	public static function SessionValidate()
	{
		Functions::SessionStart();
		if ( !isset($_SESSION["user"]) || !isset($_SESSION["type"]) ) {
        	Functions::Location('index.php');
    	}
	}

	public static function ComboboxAutoData()
	{
		$mysql = new Mysql();

		$sql = "SELECT * FROM marca";
		$marcas = $mysql->Query($sql);

		$sql = "SELECT * FROM modelo";
		$modelos = $mysql->Query($sql);

		$sql = "SELECT * FROM color";
		$colores = $mysql->Query($sql);

		$sql = "SELECT * FROM combustible";
		$combustibles = $mysql->Query($sql);

		$result = array('marcas' => $marcas,
						'modelos' => $modelos,
						'colores' => $colores,
						'combustibles' => $combustibles
						);
		return $result;
	}
}

 ?>