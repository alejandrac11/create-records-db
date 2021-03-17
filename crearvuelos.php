<!DOCTYPE html>
<html>
<head>
	<title>Crear Vuelos</title>
</head>
<body>
	
	<h1> Crear Vuelo </h1>
    <form action="guardarvuelo.php" method="POST">
    	<label for="">
    		Número de Vuelo:
    	</label>
    	<br>
    	<input type="number" name="num_vuelo">
    	<br>
    	<br>
    	<br>
    	<label for="">
    		Fecha y Hora del vuelo:
    	</label>
    	<br>
    	<input type="datetime-local" name="fecha_hora">
    	<br>
    	<br>
    	<br>
    	<label for="">
    		Destino
    	</label>
    	<br>
    	<input type="text" name="destino">
    	<br>
    	<br>
    	<br>
    	<label for="">
    		Estado del vuelo:
    	</label>
    	<br>
    	<input type="text" name="estado">
    	<br>
    	<br>
    	<button type="submit"> Enviar Respuesta </button>




    </form>


</body>
</html>