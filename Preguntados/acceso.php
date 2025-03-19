<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Autorización</title>
    <style>
    * {text-align: center;}
    img {width: 200px;}
    #imagen {display: flex; justify-content: space-around;margin: 1em}
    #acceso {background: #FFDA00; width: 400px; margin:0 auto; border: 4px solid #CC0318; color: #CC0318; font-size: 22px; text-align: center;}
    button a {text-decoration: none; color: #FFDA00;}
    button {font-size: 40px; background: #CC0318; margin: 1em;}
    #denegado {background: #FACD39; width: 400px; margin:0 auto; border: 4px solid #391518; color: #391518; font-size: 22px; text-align: center;}
    #denegado a {color: #7E4F23}
    </style>
  </head>
  <body>
    <?php
    $link = mysqli_connect('localhost','id18363736_paolarodo','B4ym4x&Ch1mu3l0') or die('<p>No se puede conectar '.mysql_error().'</p>');
    $database = 'id18363736_curso_pana';
    mysqli_select_db($link,$database) or die ('<p>No se puede seleccionar la base de datos '.$database.', posiblemente no existe en el servidor</p>');
    $table = 'preguntados';
    $query = 'SELECT usuario,contraseña FROM '.$table.' WHERE usuario="'.$_POST["login"].'" and contraseña="'.$_POST["password"].'"';
    $result = mysqli_query($link,$query) or die ('<p>Consulta fallida</p>');
    $result = mysqli_query($link,$query);
    $regs = mysqli_num_rows($result);
    if($regs==1){
      echo "<div id=imagen>";
      echo "<img src=ironman.png>";
      echo "</div>";
      echo "<div id=acceso>";
      echo "<p>Acceso concedido a <strong>".$_POST["login"]."</strong></p>";
      echo "</div>";
      echo '<button><a href="preguntas.php?login='.$_POST["login"].'">Jugar</a></button>';
    }else{
      echo "<div id=imagen>";
      echo "<img src=thanos.jpg>";
      echo "</div>";
      echo "<div id=denegado>";
      echo "<p>Acceso denegado a <strong>".$_POST["login"].". </strong></br><a href=index.php>Volver a intentar</a></p>";
      echo "</div>";
    }
   ?>
  </body>
</html>
