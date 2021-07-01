<?php

include("Conexion.php");
$recuperaid = $_GET['id'];
$peticion_restaurantes = $MySQLiconn->query("SELECT * FROM restaurantes WHERE id=".$recuperaid);

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
    <title>Restaurantes</title>
    <script type="text/javascript" src="jquery/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.mobile-1.0.min.js"></script>
    <link type="text/css" rel="stylesheet" href="jquery/jquery.mobile-1.0.min.css">
</head>

<body>
    <div data-role="page">
        <div data-role="header" data-theme="a" data-position="fixed">
            <!-- encabezado de pagina -->
            <a href="a" data-role="none"><img src="contenido/miniatura/logo_64.png"></a>
            <h3>Restaurantes</h3>
            <a href="a" data-role="none"><img src="contenido/miniatura/logo_64.png"></a>
        </div><!-- fin encabezado de pagina -->
        <!-- id = 0 img = 1, foto = 2, titulo = 3 direccion = 4 telefono=5 etiquetas= 6 -->
        <div data-role="content">
            <center>
                <img src="contenido/miniatura/gastronomia.png" width="140" height="140">
            </center>
            <ul data-role="listview" data-dividertheme="a">
                <?php
                while ($fila_restaurantes = $peticion_restaurantes -> fetch_row()) {
                    
                ?>

                <li>
                    <img src="<?php echo $fila_restaurantes[2];?>" width="140" height="140">
                    <h3><?php echo ($fila_restaurantes[3]); ?></h3>
                    <p><?php echo ($fila_restaurantes[4]); ?></p>
                    <p><?php echo ($fila_restaurantes[5]); ?></p>
                    <p><?php echo ($fila_restaurantes[6]); ?></p>
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
    </div><!-- fin de pagina -->
</body>

</html>