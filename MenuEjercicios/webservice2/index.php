<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="archivosu3/Carrusel de Citas PAg 32/css/Estiloos.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Página cliente</title>
  </head>

  <body>

<div style="background-color: rgb(202, 190, 173);" class="jumbotron text-center">
<h1>Página cliente</h1>

<div style="width: 50%;float: left;">
  <button id="pedir">Ver usuarios</button>

  <div id="lista">
    <ol>
      
    </ol>
  </div>
</div>
<div style="width: 50%;float: right;">
  <input type="text" id="nombre" class="form-control" placeholder="Nombre">
  <input type="number" id="edad" class="form-control" placeholder="Edad">
  <button class="btn" style="width: 50%;" id="crear">Crear usuario</button>
</div>

<script type="text/javascript">
  $("#pedir").click(function(){
    $.post("webservice.php",{
      usuario: 1,
    },function(data){
      //var usersJSON = JSON.parse(data);
      //console.log(usersJSON);
      var usuarios = data.split("|");
      var num_usuarios = usuarios.length;
      $("#lista ol").html("");
      for (var i = 0; i < num_usuarios;i++){
        var user = usuarios[i].split("~");
      $("#lista ol").append("<li><ul><li>"+user[0]+"</li><li>"+user[1]+"</li><li>"+user[2]+"</li></ul></li>");
      }
    });
  });
  
  $("#crear").click(function(){
   $.post("webservice.php",{
      crear: 1,
      nombre: $("#nombre").val(),
      edad: $("#edad").val()
    },function(data){
      $("#pedir").trigger("click");
    });
  });
</script>
      </div>

        <!-- id="fijado" -->
      <div  class="container">
        <div class="row">
          <div class="official-info">
            <h3>Ejercicio 1: Citas Famosas</h3>
            <p>Se muestra algunas de las citas las cuales se pueden eliminar y agregar, se restablece
          cuando se recarga la pagina</p>
            <a href="../Ejercicio1.html"><button>Ver mas...</button></a>
          </div>
          <div class="official-info">
            <h3>Ejercicio 2: Frases</h3>
            <p>Se muestra aleatoriamente dos imagenes, cuando se recarga la pagina,
          al igual de que se puede visualizar una pequeña frase.
        </p>
            <a href="../Ejercicio2 - Frases.html"><button>Ver mas...</button></a>
          </div>
          <div class="official-info">
            <h3>Ejercicio 3: Carrusel</h3>        
            <p>A traves de la llamada de ciertos archivos y el uso de jquery, en este pequeño apartado se puede observar
          algunas de las imagenes que cada cierto tiempo cambian automaticamente, al igual de que se puede seleccionar
          alguno de las imagenes que se muestra a traves de los botones que se encuentran en la parte inferior.
        </p>
            <a href="../archivosu3/Carrusel de Citas PAg 32/javascript/Ejercicio3 - Carrusel.html"><button>Ver mas...</button></a>
          </div>
          <div class="official-info">
            <h3>Ejercicio 4: Cronómetro</h3>        
            <p>En este apartado se podra observar un cronometro en el cual da la opcion de detenerlo y continuar con la ejecucion,
          en este caso recargando la pagina se restablece.
        </p>
            <a href="../Ejercicio 4 - Cronometro.html"><button>Ver mas...</button></a>
          </div>
          <div class="official-info">
            <h3>Ejercicio 5: LocalStorage</h3>        
            <p>En este ejercicio lo que se visualiza es las veces que se visita la pagina por el usuario guardando el dato sin perderlo,
          en este  caso se ejecuta en localhost, por lo cual cuando se cierra la conexion se reinicia, el contador.
        </p>
            <a href="../Ejercicio 5 - LocalStorage.html"><button>Ver mas...</button></a>
          </div>
          <div class="official-info">
            <h3>Ejercicio 6: Cronómetro con LocalStorage</h3>        
            <p>La diferencia del cronometro en este apartado es la recarga de la pagina,
          ya que si se recarga y el cronometro fue detenido, este conserva el dato y no se pierde (En este caso que se ejecuta en localhost
          se puede reiniciar al apagarse).
        </p>
            <a href="../Ejercicio 6 - cronometro-localstorage .html"><button>Ver mas...</button></a>
          </div>
          <div class="official-info">
            <h3>Ejercicio 7: iFrame</h3>        
            <p>Se muestra un pequeño juego que es llamado a traves de una URL externa</p>
            <a href="../Ejercicio 7 - iFrame.html"><button>Ver mas...</button></a>
          </div>
          <div class="official-info">
            <h3>Ejercicio 8: </h3>        
            <p>A traves del diseño se puede observar paginas en pequeñas ventanas. Las URL tiene un apartado donde agregan y
          cada uno de estas se almacena en una caja, en este caso de se encuentran predefinidas dos URL.
        </p>
            <a href="../Ejercicio8.html"><button>Ver mas...</button></a>
          </div>
          <div class="official-info">
            <h3 id="fijado">WebService</h3>        
            <p>En este ultimo apartado se hace el uso de WebService, en la pagina se llama los datos de una base de datos, las
          cuales se pueden agregar y visualizar en una pequela pagina creada, se realizan pequeñas consultas y conexion con la base de datos
          para que funcione correctamente.
        </p>
            <a href="index.php"><button>Ver mas...</button></a>
          </div>
        </div>
      </div>

  </body>
</html>