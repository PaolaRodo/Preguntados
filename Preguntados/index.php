<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesión</title>
    <style>
    * {font-size: 22px; text-align: center;}
    #tabla {background: #E50158; width: 400px; margin:0 auto; border: 4px solid black;}
    .caja {margin: 1em; color:black;}
    #ingresar {display: flex; justify-content: space-around;margin: 1em}
    #renglon {display: flex; justify-content: space-around;}
    img {width: 200px;}
    #imagen {display: flex; justify-content: space-around;margin: 1em}
    button {color:#FF5B5B; background:#0251BF;}
    a {text-decoration: none; color: #FF5B5B;}
    #botones {display: flex; justify-content: space-around;}
   </style>
  </head>
  <body>
    <div id="botones">
    <div id="registro">
      <button><a href="registro.php">Registrarse</a></button>
    </div>
  </div>
    <div id="imagen">
      <img src="escudo.png">
    </div>
    <form action="acceso.php" method="post">
    <div id="tabla">
      <div class="caja">
        <div id=renglon>
          <div class="labels"><label><strong>Usuario:</strong></label></div>
        </div>
        <div id=renglon>
          <div class="inputs"><input type="text" name="login" value=""></div>
        </div>
      </div>
      <div class="caja">
        <div id=renglon>
          <div class="label"><label><strong>Contraseña:</strong></label></div>
        </div>
        <div id=renglon>
          <div class="inputs"><input type="password" name="password" value=""></div>
        </div>
      </div>
      <div id="ingresar">
        <div id="boton"><button>Ingresar</button></div>
      </div>
    </div>
    </form>
  </body>
</html>
