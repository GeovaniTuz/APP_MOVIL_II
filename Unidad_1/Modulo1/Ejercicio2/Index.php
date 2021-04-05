<?php
    include_once 'Db.php';

    if(isset($_POST['Nombre']) or isset($_POST['Apellido']) or isset($_POST['Telefono'])) 
    {
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $telefono = $_POST['Telefono'];
        if ($nombre<> ""){
            $nombre="'%" .$nombre. "%'";
            $filtro= "SELECT * FROM datos where Nombre like ". $nombre . " order by Nombre";
            echo $filtro;
        }elseif ($apellido <> ""){
            $apellido="'%" .$apellido. "%'";
            $filtro= "SELECT * FROM datos where Apellido like ". $apellido . " order by Apellido";
            echo $filtro;
        }elseif ($telefono <> ""){
            $telefono="'%" .$telefono. "%'";
            $filtro= "SELECT * FROM datos where Telefono like ". $telefono . " order by Telefono";
            echo $filtro;
        }else{
           $filtro= "SELECT * FROM datos order by Nombre";
        }
    }else {
        $filtro= "SELECT * FROM datos order by Nombre";
    }

    $SQL = $MySQLiconn->query($filtro);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datoss</title>
    <link href="mainn.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>
<li><a href="../index.html">Inicio</a></li>
    <h1>Listado de datos </h1>
    <div>
        Buscar por:
        <form method='post' action='<?php echo $_SERVER["PHP_SELF"];?>'>
            Nombre:
            <input type='text' name='Nombre'>
            Grado:
            <input type='text' name='Apellido'>
            Posgrado:
            <input type='text' name='Telefono'>
            <input type='submit'>
        </form>
    </div>

<table style='width:100%'>
          <tr>
            <th>Nombre</th>
            <th>Grado</th> 
            <th>Posgrado</th>
          </tr>

          <?php
            while ($row = $SQL -> fetch_row()) {
                
                echo "<tr>";
                echo " <td>" . utf8_encode($row[1]) . "</td>";
                echo " <td>" . utf8_encode($row[2]) . "</td>";
                echo " <td>" . utf8_encode($row[3]) . "</td>";
                echo "</tr>";
            }
echo "</table></div>";
  ?>
</body>
</html>