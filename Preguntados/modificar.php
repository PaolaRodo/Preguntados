<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Actualizar datos</title>
    <style>
    * {font-size: 30px; text-align: center;}
    img {width: 200px}
    table {border-collapse: collapse; display: flex; justify-content: space-around; margin: 1em;}
    td {border: 2px solid #333231; padding: 1em; background: #E69234;}
    button {background: #333231; color:#C57822; margin: 0.2em}
    a {text-decoration: none; color: #C57822;}
    input {width: 100%}
    #imagen {display: flex; justify-content: space-around;margin: 1em}
    #botones {display: flex; justify-content: space-around;}
    .id {border:0; background: #E69234;}
    </style>
  </head>
  <body>
    <div id="botones">
  <div id="Jugar">
    <?php
    echo "<button id=boton><a href=preguntas.php?login=".$_GET["usuario"].">Jugar</a></button>";
    ?>
  </div>
  </div>
  <div id="imagen">
    <img src="strange.jpg">
  </div>
  <?php
  $link = mysqli_connect('localhost','id18363736_paolarodo','B4ym4x&Ch1mu3l0') or die('<p>No se puede conectar '.mysql_error().'</p>');
  $database = 'id18363736_curso_pana';
  mysqli_select_db($link,$database) or die ('<p>No se puede seleccionar la base de datos '.$database.', posiblemente no existe en el servidor</p>');
  $table = 'preguntados';
  $query = 'SELECT * FROM preguntados WHERE usuario="'.$_GET["usuario"].'"';
  $result = mysqli_query($link,$query) or die ('<p>Fall</p>');
  $regs = mysqli_num_rows($result);
  echo '<table id="tabla_result">';
  echo '<tr>';
  echo "<td><strong>ID</strong></td>";
  echo "<td><strong>Usuario</strong></td>";
  echo "<td><strong>Contraseña</strong></td>";
  echo "<td><strong>Acciones</strong></td>";
  echo '<tr>';
  for($i=0;$i<$regs;$i++) {
    echo '<tr>';
    $register = mysqli_fetch_array($result);
    echo '<form action="modificado.php" method="POST">';
    echo '<td><input type="text" readonly class="id" name="id" value="'.$register["ID"].'"></td>';
    echo '<td><input type="text" name="usuario" value="'.$register["usuario"].'"></td>';
    echo '<td><input type="text" name="contraseña" value="'.$register["contraseña"].'"></td>';
    echo '<td><button>Modificar datos</button>';
    echo '</form>';
    echo '<button><a href="borrar.php?usuario='.$register["usuario"].'">Borrar usuario</a></button></td>';
    echo '<tr>';
  }
  echo '</table>';
  ?>
  </body>
</html>
