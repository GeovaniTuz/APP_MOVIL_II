<?php

error_reporting(E_ALL ^ E_NOTICE);

include("consulta.php");

// Obtener usuarios
if($_POST['usuario']){
	usuario();
}

// Crear usuarios
if($_POST['crear']){
	crear_user($_POST);
}

// Funcion obtener usuarios
function usuario(){
	
	getUser($_GET['nombre'],$_GET['edad']);

}
 




?>