<?php
include("Conexion.php");


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <script type="text/javascript" src="jquery/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.mobile-1.0.min.js"></script>
    <link type="text/css" rel="stylesheet" href="jquery/jquery.mobile-1.0.min.css">
</head>
<body>
    <div data-role="page"><!-- inicio de pagina -->

        <div data-role="header" data-theme="a" data-position="fixed"><!-- encabezado de pagina -->
            <a href="a" data-role="none"><img src="contenido/miniatura/logo_64.png" ></a>
            <h3>Inicio</h3>
            <a href="a" data-role="none"><img src="contenido/miniatura/logo_64.png" ></a>
        </div><!-- fin encabezado de pagina -->

        <div data-role="content" ><!-- contenido de pagina -->
            <ul data-role="listview" data-filter-placeholder="Buscar" data-filter="true">

                <?php
                $peticion = $MySQLiconn->query("SELECT * FROM ejes");//dependiendo a la consulta se usa el arreglo de 0 hasta n
                while ($fila = $peticion -> fetch_array()) {//por ejemplo foto = 2, titulo = 1 y id = 0
                ?>
                <form action="get" method="get"></form>
                    <li><a href="detalles_region.php?variable=<?php echo $fila['id'];?>">
                    <img src="<?php echo $fila['foto'];?>" width="140" height="140">
                    <h3><?php echo ($fila['titulo']); ?></h3>
                    <p><?php echo ($fila['descripcion']); ?></p>
                    </a>
                    
                    </li>
                
                <?php
                }
                ?>

            </ul>
        </div><!-- fin contenido de pagina -->

        <div data-role="footer" data-position="fixed" data-theme="a"><!-- pie de pagina -->
            <div data-role="navbar">
                <ul>
                    <li><a href="#acerca" data-icon="info" data-rel="dialog">Acerca de</a></li>
                </ul>
            </div>

        </div><!-- fin pie de pagina -->

    </div><!-- fin de pagina -->

    <!-- NUEVA PAGINA -->
    <div data-role="page" id="acerca"> <!-- inicio pagina -->
        <div data-role="header" data-theme="a"><!-- encabezado de pagina -->
            <h3> Acerca de </h3>
        </div> <!-- fin de encabezado -->
        <div data-role="content">
            <p>
                Ejemplo de acerca de
            </p>
        </div>
    </div> <!-- fin pagina -->
</body>
</html>