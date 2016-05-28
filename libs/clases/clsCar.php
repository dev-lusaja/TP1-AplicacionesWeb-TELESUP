<?php 
/**
* 
*/
class clsCar
{
	
	function __construct()
	{
		
	}

	public static function Insert($data)
	{
		$mysql = new Mysql();

		clsCar::ValidateFileds($data);
		extract( clsCar::SetFields($data) );

		$sql = "
			INSERT INTO auto (Color_CodigoColor, Combustible_codCombustible, Marca_codigoMarca, Modelo_CodigoModelo, Ano_fabricacion, Ano_Modelo, Numero_Motor, Numero_Cilindros, Ejes, Asientos, Traccion, Puertas, Peso_Seco, Peso_Bruto, Imagen, Transmision, precio, cantidad) VALUES ('$Color_CodigoColor', '$Combustible_codCombustible', '$Marca_codigoMarca', '$Modelo_CodigoModelo', '$Ano_fabricacion', '$Ano_Modelo', '$Numero_Motor', '$Numero_Cilindros', '$Ejes', '$Asientos', '$Traccion', '$Puertas', '$Peso_Seco', '$Peso_Bruto', '$Imagen', '$Transmision', '$precio', '$cantidad')";
		$auto = $mysql->Query($sql);

		if (!$auto) {
			throw new Exception("Se presento un error al insertar el nuevo auto");
		}
	}

	public static function Update($data)
	{
		$mysql = new Mysql();

		clsCar::ValidateFileds($data);
		extract( clsCar::SetFields($data) );

		$sql = "
			UPDATE auto SET Color_CodigoColor = '$Color_CodigoColor', Combustible_codCombustible = '$Combustible_codCombustible', Marca_codigoMarca = '$Marca_codigoMarca', Modelo_CodigoModelo = '$Modelo_CodigoModelo', Ano_fabricacion = '$Ano_fabricacion', Ano_Modelo = '$Ano_Modelo', Numero_Motor = '$Numero_Motor', Numero_Cilindros = '$Numero_Cilindros', Ejes = '$Ejes', Asientos = '$Asientos', Traccion = '$Traccion', Puertas = '$Puertas', Peso_Seco = '$Peso_Seco', Peso_Bruto = '$Peso_Bruto', Imagen = '$Imagen', Transmision = '$Transmision', precio = '$precio', cantidad = '$cantidad' WHERE idAuto = '$idAuto'";
		$auto = $mysql->Query($sql);

		if (!$auto) {
			throw new Exception("Se presento un error al actualizar el auto");
		}
	}

	public static function Delete($id)
	{
		Functions::validateVariable($id, 'integer');
		$mysql = new Mysql();
		$sql = "DELETE FROM auto WHERE idAuto = $id";
		$auto = $mysql->Query($sql);
	}

	private static function SetFields($data)
	{

		$fields = array (
			'idAuto' => $data['idAuto'],
			'Color_CodigoColor' => $data['color'],
			'Combustible_codCombustible' => $data['combustible'],
			'Marca_codigoMarca' => $data['marca'],
			'Modelo_CodigoModelo' => $data['modelo'],
			'Ano_fabricacion' => $data['ano_fabricacion'],
			'Ano_Modelo' => $data['ano_modelo'],
			'Numero_Motor' => $data['n_motor'],
			'Numero_Cilindros' => $data['cilindros'],
			'Ejes' => $data['ejes'],
			'Asientos' => $data['asientos'],
			'Traccion' => $data['traccion'],
			'Puertas' => $data['puertas'],
			'Peso_Seco' => $data['peso_seco'],
			'Peso_Bruto' => $data['peso_bruto'],
			'Imagen' => $data['imagen'],
			'Transmision' => $data['transmision'],
			'precio' => $data['precio'],
			'cantidad' => $data['cantidad']
			);
		return $fields;
	}

	private static function ValidateFileds($data)
	{
		if ( $data['idAuto'] != null ) {
			Functions::validateVariable($data['idAuto'], 'integer');
		}
		Functions::validateVariable($data['color'], 'integer');
		Functions::validateVariable($data['combustible'], 'integer');
		Functions::validateVariable($data['marca'], 'integer');
		Functions::validateVariable($data['modelo'], 'integer');
		Functions::validateVariable($data['ano_fabricacion'], 'string');
		Functions::validateVariable($data['ano_modelo'], 'string');
		Functions::validateVariable($data['n_motor'], 'string');
		Functions::validateVariable($data['cilindros'], 'integer');
		Functions::validateVariable($data['ejes'], 'integer');
		Functions::validateVariable($data['asientos'], 'integer');
		Functions::validateVariable($data['traccion'], 'string');
		Functions::validateVariable($data['puertas'], 'integer');
		Functions::validateVariable($data['peso_seco'], 'integer');
		Functions::validateVariable($data['peso_bruto'], 'integer');
		Functions::validateVariable($data['imagen'], 'string');
		Functions::validateVariable($data['transmision'], 'string');
		Functions::validateVariable($data['precio'], 'integer');
		Functions::validateVariable($data['cantidad'], 'integer');
	}
}


?>