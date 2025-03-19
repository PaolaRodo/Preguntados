<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Actualizados</title>
    <style>
      img {width: 200px;}
      * {text-align: center;}
      #imagen {display: flex; justify-content: space-around;margin: 1em}
      #actualizado {background:#9B6B7B; width: 400px; margin:0 auto; border: 4px solid #C50109; color: #C50109; font-size: 22px; text-align: center;}
      button {background: #C50109; font-size: 35px; margin: 1em}
      a {text-decoration: none; color: #9B6B7B;}
      </style>
    </head>
    <body>
    <?php
    $link = mysqli_connect('localhost','id18363736_paolarodo','B4ym4x&Ch1mu3l0') or die('<p>No se puede conectar '.mysql_error().'</p>');
    $database = 'id18363736_curso_pana';
    mysqli_select_db($link,$database) or die ('<p>No se puede seleccionar la base de datos '.$database.', posiblemente no existe en el servidor</p>');
    $table = 'preguntados';
    $query = 'UPDATE preguntados SET usuario="'.$_POST["usuario"].'",contraseña="'.$_POST["contraseña"].'"WHERE ID="'.$_POST["id"].'"';
    $result = mysqli_query($link,$query) or die ('<p>Consulta fallida</p>');
    echo '<div id="imagen">';
    echo '<img src="wanda.jpg">';
    echo '</div>';
    echo '<div id="actualizado">';
    echo '<p>Datos Actualizados</p>';
    echo '</div>';
    echo "<button><a href=modificar.php?usuario=".$_POST["usuario"].">Regresar</a></button>";
    ?>
  </body>
</html>
