<?php  

$num = $_REQUEST["num_vuelo"];

$date = $_REQUEST["fecha_hora"];

$destino = $_REQUEST["destino"];

$estado = $_REQUEST["estado"]; 

$host = "localhost";

$database = "aeropuerto";

$username = "root";

$password = "";

$conection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

$save = $conection->prepare("INSERT INTO vuelos (id,num_vuelo,hora,destino,estado) VALUES(NULL,'$num','$date','$destino','$estado')");

$save->execute();

?>
<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Vuelo Guardado</title>
		</head>
		<body>

			<h1>Vuelo Guardado Exitosamente</h1>
			<p>
				Número de vuelo: <?php echo $num; ?> 
			</p>
			<p>
				Fecha y Hora del vuelo: <?php echo $date; ?>
			</p>
			<p>
				Destino del vuelo: <?php echo $destino; ?>
			</p>
			<p>
				Estado del vuelo: <?php echo $estado; ?>
			</p>
			<a href="crearvuelos.php">Registrar un nuevo vuelo </a>
		</body>
		</html>		
