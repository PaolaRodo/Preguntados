<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    * {text-align: center;}
    table {border-collapse: collapse; display: flex; justify-content: space-around; margin: 1em;}
    td {border: 2px solid #9900B2; padding: 1em; background: black; color: white; font-size: 15px;}
    img {width: 200px}
    button {background: #9900B2; font-size: 30px}
    a {text-decoration: none; color: black}
    #imagen {display: flex; justify-content: space-around;margin: 1em}
    </style>
  </head>
  <body>
    <?php
    $link = mysqli_connect('localhost','id18363736_paolarodo','B4ym4x&Ch1mu3l0') or die('<p>No se puede conectar '.mysql_error().'</p>');
    $database = 'id18363736_curso_pana';
    mysqli_select_db($link,$database) or die ('<p>No se puede seleccionar la base de datos '.$database.', posiblemente no existe en el servidor</p>');
    $table = 'preguntados';
    $query = 'UPDATE preguntados SET puntuación="'.$_POST["Score"].'", Pregunta1="'.$_POST["p1"].'", Pregunta2="'.$_POST["p2"].'", Pregunta3="'.$_POST["p3"].'", Pregunta4="'.$_POST["p4"].'", Pregunta5="'.$_POST["p5"].'", Pregunta6="'.$_POST["p6"].'", Pregunta7="'.$_POST["p7"].'", Pregunta8="'.$_POST["p8"].'", Pregunta9="'.$_POST["p9"].'", Pregunta10="'.$_POST["p10"].'"WHERE usuario="'.$_POST["Usuario"].'"';
    $result = mysqli_query($link,$query) or die ('<p>Consulta fallida</p>');
    $query = 'SELECT * FROM preguntados WHERE usuario="'.$_POST["Usuario"].'"';
    $result = mysqli_query($link,$query) or die ('<p>Fall</p>');
    $regs = mysqli_num_rows($result);
    echo "<div id=imagen>";
    echo "<img src=panter.jpg>";
    echo "</div>";
    echo '<table id="tabla_result">';
    echo '<tr>';
    echo "<td><strong>Usuario</strong></td>";
    echo "<td><strong>Puntuación</strong></td>";
    echo "<td><strong>Pregunta 1</strong></td>";
    echo "<td><strong>Pregunta 2</strong></td>";
    echo "<td><strong>Pregunta 3</strong></td>";
    echo "<td><strong>Pregunta 4</strong></td>";
    echo "<td><strong>Pregunta 5</strong></td>";
    echo "<td><strong>Pregunta 6</strong></td>";
    echo "<td><strong>Pregunta 7</strong></td>";
    echo "<td><strong>Pregunta 8</strong></td>";
    echo "<td><strong>Pregunta 9</strong></td>";
    echo "<td><strong>Pregunta 10</strong></td>";
    echo '<tr>';
    for($i=0;$i<$regs;$i++) {
      echo '<tr>';
      $register = mysqli_fetch_array($result);
      echo '<td>'.$register["usuario"]."</td>";
      echo '<td>'.$register["puntuación"]."</td>";
      echo '<td>'.$register["Pregunta1"]."</td>";
      echo '<td>'.$register["Pregunta2"]."</td>";
      echo '<td>'.$register["Pregunta3"]."</td>";
      echo '<td>'.$register["Pregunta4"]."</td>";
      echo '<td>'.$register["Pregunta5"]."</td>";
      echo '<td>'.$register["Pregunta6"]."</td>";
      echo '<td>'.$register["Pregunta7"]."</td>";
      echo '<td>'.$register["Pregunta8"]."</td>";
      echo '<td>'.$register["Pregunta9"]."</td>";
      echo '<td>'.$register["Pregunta10"]."</td>";
      echo '<tr>';
    }
    echo '</table>';
    ?>
    <button><a href="tabla.php">Tabla de puntuación</a></butoon>
  </body>
</html>
