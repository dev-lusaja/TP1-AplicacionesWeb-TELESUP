<?php 
/**
* 
*/
class clsCar
{
	
	function __construct()
	{
		
	}

	public static function Get()
	{
		$sql = "
			SELECT a.idAuto, a.imagen as producto,a.cantidad ,CONCAT(m.Descripcion, ' ' , mo.Descripcion, ' ', a.Ano_fabricacion, ' ', a.Traccion) as descripcion, a.precio  FROM auto a
			inner join marca m on (m.codigoMarca = a.Marca_codigoMarca)
			inner join modelo mo on (mo.codigoModelo = a.Modelo_CodigoModelo)";

		$mysql = new Mysql();
		$cars = $mysql->Query($sql);
		return $cars;
	}

	public static function Insert($data)
	{

		clsCar::ValidateFileds($data);
		extract( clsCar::SetFields($data) );

		$sql = "
			INSERT INTO auto (Color_CodigoColor, Combustible_codCombustible, Marca_codigoMarca, Modelo_CodigoModelo, Ano_fabricacion, Ano_Modelo, Numero_Motor, Numero_Cilindros, Ejes, Asientos, Traccion, Puertas, Peso_Seco, Peso_Bruto, Imagen, Transmision, precio, cantidad) VALUES ('$Color_CodigoColor', '$Combustible_codCombustible', '$Marca_codigoMarca', '$Modelo_CodigoModelo', '$Ano_fabricacion', '$Ano_Modelo', '$Numero_Motor', '$Numero_Cilindros', '$Ejes', '$Asientos', '$Traccion', '$Puertas', '$Peso_Seco', '$Peso_Bruto', '$Imagen', '$Transmision', '$precio', '$cantidad')";
		
		$mysql = new Mysql();
		$car = $mysql->Query($sql);

		if (!$car) {
			throw new Exception("Se presento un error al insertar el nuevo auto");
		}
	}

	public static function Update($data)
	{

		clsCar::ValidateFileds($data);
		extract( clsCar::SetFields($data) );

		$sql = "
			UPDATE auto SET Color_CodigoColor = '$Color_CodigoColor', Combustible_codCombustible = '$Combustible_codCombustible', Marca_codigoMarca = '$Marca_codigoMarca', Modelo_CodigoModelo = '$Modelo_CodigoModelo', Ano_fabricacion = '$Ano_fabricacion', Ano_Modelo = '$Ano_Modelo', Numero_Motor = '$Numero_Motor', Numero_Cilindros = '$Numero_Cilindros', Ejes = '$Ejes', Asientos = '$Asientos', Traccion = '$Traccion', Puertas = '$Puertas', Peso_Seco = '$Peso_Seco', Peso_Bruto = '$Peso_Bruto', Imagen = '$Imagen', Transmision = '$Transmision', precio = '$precio', cantidad = '$cantidad' WHERE idAuto = '$idAuto'";
		
		$mysql = new Mysql();
		$car = $mysql->Query($sql);

		if (!$car) {
			throw new Exception("Se presento un error al actualizar el auto");
		}
	}

	public static function Delete($id)
	{
		Functions::validateVariable($id, 'integer');
		
		$sql = "DELETE FROM auto WHERE idAuto = $id";
		
		$mysql = new Mysql();
		$car = $mysql->Query($sql);

		if (!$car) {
			throw new Exception("Se presento un error al eliminar el auto");
		}
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