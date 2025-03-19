<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    *{text-align: center;}
      img {width: 200px;}
      #imagen {display: flex; justify-content: space-around;margin: 1em}
      #eliminado {background: #14A33C; width: 400px; margin:0 auto; border: 4px solid black; color: black; font-size: 22px; text-align: center;}
      button {background:black; margin: 1em; font-size: 35px}
      a {text-decoration: none; color: #14A33C}
      </style>
    </head>
    <body>
    <?php
    $link = mysqli_connect('localhost','id18363736_paolarodo','B4ym4x&Ch1mu3l0') or die('<p>No se puede conectar '.mysql_error().'</p>');
    $database = 'id18363736_curso_pana';
    mysqli_select_db($link,$database) or die ('<p>No se puede seleccionar la base de datos '.$database.', posiblemente no existe en el servidor</p>');
    $table = 'preguntados';
    $query = 'DELETE FROM preguntados WHERE usuario="'.$_GET["usuario"].'"';
    $result = mysqli_query($link,$query) or die ('<p>Consulta fallida</p>');
    echo '<div id="imagen">';
    echo '<img src="hulk.png">';
    echo '</div>';
    echo '<div id="eliminado">';
    echo '<p>Usuario <strong>'.$_GET["usuario"].'</strong> eliminado</p>';
    echo '</div>';
    echo "<button><a href=index.php>Volver a inicio</a></button>";
    ?>
  </body>
</html>
