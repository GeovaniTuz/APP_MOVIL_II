<?php
	
	function getUser($nombre = null, $edad = null){

		include('conection.php');

		$sql = "SELECT * FROM w_usuarios";

		if($nombre || $edad){
			$sql.= " WHERE ";
		}

		$contador = 0;

		if($nombre){
			$sql.= " Nombre = '".$nombre."'";
			$contador++;
		}
		if($edad){
			if($contador > 0){
				$sql.= " AND ";
			}

			$sql.= " Edad = '".$edad."'";
			$contador++;
		}

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    $contador_user = 0;
		    while($row = $result->fetch_assoc()) {
		    	if($contador_user > 0){
		    		echo "|";
		    	}

		    	//$usersJSON = new stdClass();
		    	//$usersJSON->nombre = $row['Nombre'];
				//$usersJSON->edad = $row['Edad'];
				//$usersJSON->genero = $row['Genero'];
				echo $row['Nombre']."~".$row['Edad'];
				//echo json_encode($usersJSON);

		    	//die();
		    	$contador_user++;
		    }
		} else {
		    echo "0 results";
		}
	}

	function crear_user($data){
		include('conection.php');
		$sql = "INSERT INTO w_usuarios (Nombre, Edad) VALUES ('".$data['nombre']."','".$data['edad']."')";
		$conn->query($sql);
	}



?>