<?php  

$nombre = $_REQUEST["nom_pasajero"];

$nacionalidad = $_REQUEST["nacionalidad"];

$destinofinal = $_REQUEST["destino"];

$vueloid = $_REQUEST["vuelo_id"]; 

$host = "localhost";

$database = "aeropuerto";

$username = "root";

$password = "";

$conection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

$save = $conection->prepare("INSERT INTO pasajeros (id,nombre,nacionalidad,destino_final,vuelo_id) VALUES(NULL,'$nombre','$nacionalidad','$destinofinal','$vueloid')");

$save->execute();

$consulta = $conection->prepare("SELECT num_vuelo FROM vuelos WHERE id=$vueloid");

$consulta->execute();

$vuelo = $consulta->fetch();

?>
<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Pasajero Registrado</title>
		</head>
		<body>

			<h1>Pasajero Registrado Exitosamente</h1>
			<p>
				Nombre del Pasajero: <?php echo $nombre; ?> 
			</p>
			<p>
				Nacionalidad del Pasajero: <?php echo $nacionalidad; ?>
			</p>
			<p>
				Destino final del vuelo: <?php echo $destinofinal; ?>
			</p>
			<p>
				Número de vuelo: <?php echo $vuelo["num_vuelo"]; ?>
			</p>
			<a href="crearpasajeros.php">Registrar un nuevo pasajero </a>
		</body>
		</html>		
