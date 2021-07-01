<?php
include("Conexion.php");

$recuperaid = $_GET['id'];
$peticion = $MySQLiconn->query("SELECT * FROM ejes WHERE id=".$recuperaid);
$fila = $peticion->fetch_array();
//$peticion = $MySQLiconn->query("SELECT * FROM ejes WHERE id=".$recuperaid);
//$fila = $peticion -> fetch_row();//no se hace un while porque lo que retorna es un solo valor y los datos aqui se almacenan en un arreglo
/*
WHERE id=".$_GET['id']
	$peticion = $MySQLiconn->query("SELECT titulo,foto FROM ejes" );
	$fila = $peticion->fetch_array();
*/
$peticion_restaurantes = $MySQLiconn->query("SELECT * FROM restaurantes WHERE id=".$recuperaid);
$fila_restaurantes = $peticion_restaurantes->fetch_array();
$peticion_hospedaje = $MySQLiconn->query("SELECT * FROM hospedaje WHERE id=".$recuperaid);
$fila_hospedaje = $peticion_hospedaje->fetch_array();
$peticion_turismo = $MySQLiconn->query("SELECT * FROM turismo WHERE id=".$recuperaid);
$fila_turismo = $peticion_turismo->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalles de la Región</title>
    <script type="text/javascript" src="jquery/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.mobile-1.0.min.js"></script>
    <link type="text/css" rel="stylesheet" href="jquery/jquery.mobile-1.0.min.css">
</head>
<body>
    <div data-role="page">
    <div data-role="header" data-theme="a" data-position="fixed"><!-- encabezado de pagina -->
            <a href="a" data-role="none"><img src="contenido/miniatura/logo_64.png" ></a>
            <h3><?php echo utf8_encode($fila[1]);?></h3>
            <a href="a" data-role="none"><img src="contenido/miniatura/logo_64.png" ></a>
        </div><!-- fin encabezado de pagina -->
        <!-- titulo = 0, foto = 1, descripcion = 2, id = 3 DE ANTES -->
        <!-- id = 0 titulo = 1, foto = 2, descripcion = 3 d_completa = 4 -->
        <div data-role="content">
                <img src="<?php echo utf8_encode($fila[2]);?>" style="width:100%; heigth:140px;">
                <ul data-role="listview" data-dividertheme="a">
                    <li data-role="list-divider">
                        <span style="text-align:justify;">
                        <?php echo utf8_encode($fila[3]);?>
                        </span>
                    </li>

                    <li>
                        <a href="masinformacion.php? id=<?php echo $fila[0];?>">
                        <img src="<?php echo utf8_encode($fila[2]);?>"  width="140" height="140">
                        <h3>Más sobre... <?php echo utf8_encode($fila[1]);?></h3>
                        <p>Más sobre... <?php echo utf8_encode($fila[1]);?></p>
                        </a>
                    </li>

                    <li>
                        <a href="Restaurantes.php? id=<?php echo $fila_restaurantes[0];?>">
                        <img src="contenido/miniatura/gastronomia.png"  width="140" height="140">
                        <h3>Restaurantes</h3>
                        <p>¿Donde comer?</p>
                        </a>
                    </li>

                    <li>
                        <a href="Hospedaje.php? id=<?php echo $fila_hospedaje[0];?>">
                        <img src="contenido/miniatura/hospedaje.png"  width="140" height="140">
                        <h3>Hospedaje</h3>
                        <p>¿Donde hospedarse?</p>
                        </a>
                    </li>

                    <li>
                        <a href="Turismo.php? id=<?php echo $fila_turismo[0];?>">
                        <img src="contenido/miniatura/turismo.png"  width="140" height="140">
                        <h3>Turismo</h3>
                        <p>¿A donde ir?</p>
                        </a>
                    </li>
                </ul>
        </div>

        <div data-role="footer" data-position="fixed" data-theme="a"><!-- pie de pagina -->
            <div data-role="navbar">
                <ul>
                    <li><a href="index.php" data-icon="back" data-rel="back">Regresar</a></li>
                </ul>
            </div>

        </div><!-- fin pie de pagina -->
    </div>
</body>
</html>