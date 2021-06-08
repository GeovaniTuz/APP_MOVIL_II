<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <title>Página cliente</title>
  </head>

  <style type="text/css">
    #lista{
      margin-top: 20px;
      width: 95%;
      padding: 15px;
      border: 1px solid black;
    }
  </style>

  <body>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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

  </body>
</html>