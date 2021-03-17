<?php

$host = "localhost";

$database = "aeropuerto";

$username = "root";

$password = "";

$conection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

$consulta = $conection->prepare("SELECT id,num_vuelo FROM vuelos");

$consulta->execute();

$vuelos = $consulta->fetchAll();


?>

<!DOCTYPE html>

<html>
<head>
	<title>Crear Pasajeros</title>
</head>
<body>
	
	<h1> Crear Pasajero </h1>
    <form action="guardarpasajero.php" method="POST">
    	<label for="">
    		Nombre del Pasajero:
    	</label>
    	<br>
    	<input type="text" name="nom_pasajero">
    	<br>
    	<br>
    	<br>
    	<label for="">
    		Nacionalidad del Pasajero:
    	</label>
    	<br>
    	<input type="text" name="nacionalidad">
    	<br>
    	<br>
    	<br>
    	<label for="">
    		Destino Final
    	</label>
    	<br>
    	<input type="text" name="destino">
    	<br>
    	<br>
    	<br>
    	<label for="">
    		Vuelo:
    	</label>
    	<br>
    	<select name="vuelo_id" id=""> 
           <option value="">
               Seleccione:
           </option>
           <?php
            for ($i=0; $i < count($vuelos); $i++) { 
           ?>
           <option value="<?php echo $vuelos[$i]["id"];?>">
               <?php
                 echo $vuelos[$i]["num_vuelo"];


               ?>
           </option>
           <?php
                }
           ?>
        </select>
    	<br>
    	<br>
    	<button type="submit"> Enviar Respuesta </button>




    </form>


</body>
</html>