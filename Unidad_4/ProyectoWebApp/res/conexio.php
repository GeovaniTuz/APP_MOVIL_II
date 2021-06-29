<?php


define('_HOST_NAME','localhost');
     define('_DATABASE_USER_NAME','root');
     define('_DATABASE_PASSWORD','');
     define('_DATABASE_NAME','proyectowebapp');
      
     $MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
  
     if($MySQLiconn->connect_errno)
     {
       die("ERROR : -> ".$MySQLiconn->connect_error);
     }
 
/*	 
 //Codigo para Insertar Datos 
if(isset($_POST['guardar']))
{
	echo "Guardandoooooooooooooooooooo";

	$titulolugar = $MySQLiconn->real_escape_string($_POST['titulo_']);
  $fotolugar = $MySQLiconn->real_escape_string($_POST['foto_']);
	$descripcionlugar = $MySQLiconn->real_escape_string($_POST['descripcion_']);
	$d_completalugar = $MySQLiconn->real_escape_string($_POST['d_completa_']);

	$SQL = $MySQLiconn->query("INSERT INTO ejes(titulo, foto, descripcion, d_completa) VALUES('$titulolugar', '$fotolugar', '$descripcionlugar', '$d_completalugar')");

	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
	header("Location:index.php");
}

// Codigo para Eliminar Datos 
if(isset($_GET['eliminar']))
{
	$SQL = $MySQLiconn->query("DELETE FROM ejes WHERE id=".$_GET['eliminar']);
	header("Location:index.php");
}

 Codigo para Editar Datos 
if(isset($_GET['editar']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM ejes WHERE id=".$_GET['editar']);
	$getROW = $SQL->fetch_array();
}

if(isset($_GET['variable']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM ejes WHERE id=".$_GET['variable']);
	$getROW = $SQL->fetch_array();
}
 Codigo para Actualizar Datos 
if(isset($_POST['actualizar']))
{
	$SQL = $MySQLiconn->query("UPDATE ejes SET titulo='".$_POST['titulo_']."', foto='".$_POST['foto_']."', descripcion='".$_POST['descripcion_']."', d_completa='".$_POST['d_completa_']."' WHERE id=".$_GET['editar']);
	header("Location:Mas vendidos.php"); //SI NO FUNCIONA SACAR LOS CRUDS DE LA CARPETA
}

*/
?>