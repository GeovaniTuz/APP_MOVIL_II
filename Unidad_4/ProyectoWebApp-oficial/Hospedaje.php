<?php
include("Conexion.php");
$recuperaid = $_GET['id'];

$peticion_hospedaje = $MySQLiconn->query("SELECT * FROM hospedaje WHERE id=".$recuperaid);

//$peticion = $MySQLiconn->query("SELECT * FROM ejes WHERE id=".$recuperaid);
//$fila = $peticion -> fetch_row();//no se hace un while porque lo que retorna es un solo valor y los datos aqui se almacenan en un arreglo
/*
WHERE id=".$_GET['id']
	$peticion = $MySQLiconn->query("SELECT titulo,foto FROM ejes" );
	$fila = $peticion->fetch_array();
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospedaje</title>
    <script type="text/javascript" src="jquery/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.mobile-1.0.min.js"></script>
    <link type="text/css" rel="stylesheet" href="jquery/jquery.mobile-1.0.min.css">
</head>

<body>
    <div data-role="page">
        <div data-role="header" data-theme="a" data-position="fixed">
            <!-- encabezado de pagina -->
            <a href="a" data-role="none"><img src="contenido/miniatura/logo_64.png"></a>
            <h3>Hospedaje</h3>
            <a href="a" data-role="none"><img src="contenido/miniatura/logo_64.png"></a>
        </div><!-- fin encabezado de pagina -->

        <!-- id = 0 titulo = 1, img = 2, foto = 3 direccion = 4 etiquetas = 5 telefono = 6 -->
        <div data-role="content">
            <center>
                <img src="contenido/miniatura/hospedaje.png" width="140" height="140">
            </center>
            <ul data-role="listview" data-dividertheme="a">
                <li data-role="list-divider">

                </li>
                <?php
                while ($fila_hospedaje = $peticion_hospedaje -> fetch_row()) {//por ejemplo foto = 2, titulo = 1 y id = 0
                ?>
                <li>
                    <!-- id = 0 titulo = 1, img = 2, foto = 3 direccion = 4 etiquetas = 5 telefono = 6 -->
                    <img src="<?php echo $fila_hospedaje[3];?>" width="140" height="140">
                    <h3><?php echo ($fila_hospedaje[1]); ?></h3>
                    <p><?php echo ($fila_hospedaje[4]); ?></p>
                    <p><?php echo ($fila_hospedaje[5]); ?></p>
                    <p><?php echo ($fila_hospedaje[6]); ?></p>
                </li>

                <?php
                }
                ?>
            </ul>
        </div>

        <div data-role="footer" data-position="fixed" data-theme="a">
            <!-- pie de pagina -->
            <div data-role="navbar">
                <ul>
                    <li><a href="index.php" data-icon="back" data-rel="back">Regresar</a></li>
                </ul>
            </div>

        </div><!-- fin pie de pagina -->
    </div>
</body>

</html>