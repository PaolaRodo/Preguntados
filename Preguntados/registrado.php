<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  <style>
  * {text-align: center;}
  img {width: 200px;}
  button {background: #713B2B; color: #BABBBB; font-size: 40px;}
  #imagen {display: flex; justify-content: space-around;margin: 1em}
  #añadido {background: #8E8F8F; width: 400px; margin:0 auto; border: 4px solid #713B2B; color: black; font-size: 22px; text-align: center;}
  #prohibido {background: #304024; width: 400px; margin:0 auto; border: 4px solid #D69226; color: black; font-size: 22px; text-align: center;}
  #prohibido a {color: #D69226}
  #boton {margin: 1em; text-align: center;}
  #boton a {text-decoration: none; color: #BABBBB}
  </style>
  </head>
  <body>
    <?php
    if($_POST["password"]==$_POST["confirmar"]){
      $link = mysqli_connect('localhost','id18363736_paolarodo','B4ym4x&Ch1mu3l0') or die('<p>No se puede conectar '.mysql_error().'</p>');
      $database = 'id18363736_curso_pana';
      mysqli_select_db($link,$database) or die ('<p>No se puede seleccionar la base de datos '.$database.', posiblemente no existe en el servidor</p>');
      $table = 'preguntados';
      $query = 'INSERT INTO preguntados VALUES("","'.$_POST["login"].'","'.$_POST["password"].'","","","","","","","","","","","")';
      $result = mysqli_query($link,$query) or die ('<p>Consulta fallida</p>');
      echo "<div id=imagen>";
      echo "<img src=martillo.png>";
      echo "</div>";
      echo "<div id=añadido>";
      echo "<p>Usuario <strong>".$_POST["login"]."</strong> agregado</p>";
      echo "</div>";
      echo '<button id=boton><a href="preguntas.php?login='.$_POST["login"].'">Jugar</a></button>';
    }else{
      echo "<div id=imagen>";
      echo "<img src=loki.jpg>";
      echo "</div>";
      echo "<div id=prohibido>";
      echo "<p>La contraseña no coincide.</br><a href=registro.php>Volver a intentar</a></p>";
      echo "</div>";
    }
   ?>
  </body>
</html>
