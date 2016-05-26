<?php 

class clsLogin
{
	public $user;
	public $password;
	public $type;

	function __construct($user, $password, $type)
	{
		$this->user = $user;
		$this->password = $password;
		$this->type = $type;
		$this->Login();
	}

	private function Login()
	{
		$sql = "select Nombre_Usuario from usuario where Nombre_Usuario='{$this->user}' and Clave='{$this->password}' and Tipo_Usuario_CodTipo = {$this->type}";
		$mysql = new Mysql();
		$user_data = $mysql->Query($sql);

		if (count($user_data) == 0) {
			throw new Exception("Datos incorrectos");
		}
		Functions::SessionStart();
		$_SESSION["type"] = $this->type;
		$_SESSION["user"] = $this->user;
	}
}
?>