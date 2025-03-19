<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    * {text-align: center;}
    table {border-collapse: collapse; display: flex; justify-content: space-around; margin: 1em;}
    td {border: 2px solid #8D3F1E; padding: 1em; background: #5832BD; font-size: 20px;}
    img {width: 200px}
    #imagen {display: flex; justify-content: space-around;margin: 1em}
    </style>
  </head>
  <body>
    <?php
    $link = mysqli_connect('localhost','id18363736_paolarodo','B4ym4x&Ch1mu3l0') or die('<p>No se puede conectar '.mysql_error().'</p>');
    $database = 'id18363736_curso_pana';
    mysqli_select_db($link,$database) or die ('<p>No se puede seleccionar la base de datos '.$database.', posiblemente no existe en el servidor</p>');
    $table = 'preguntados';
    $query = 'SELECT * FROM preguntados ORDER BY puntuación DESC';
    $result = mysqli_query($link,$query) or die ('<p>Consulta fallida</p>');
    $regs = mysqli_num_rows($result);
    echo "<div id=imagen>";
    echo "<img src=a.png>";
    echo "</div>";
    echo '<table id="tabla_result">';
    echo '<tr>';
    echo "<td><strong>Usuario</strong></td>";
    echo "<td><strong>Puntuación</strong></td>";
    echo '<tr>';
    for($i=0;$i<$regs;$i++) {
      echo '<tr>';
      $register = mysqli_fetch_array($result);
      echo '<td>'.$register["usuario"]."</td>";
      echo '<td>'.$register["puntuación"]."</td>";
      echo '<tr>';
    }
    echo '</table>';
    ?>
  </body>
</html>
