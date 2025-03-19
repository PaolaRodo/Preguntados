<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  <style>
  * {font-size: 22px; text-align: center;}
  a {text-decoration: none; color: #E81F22;}
  img {width: 200px}
  button {background: #050202; color: #E81F22;}
  #registro {background: #E81F22; width: 400px; margin:0 auto; border: 4px solid #050202;}
  #caja {margin: 0.5em; color:black;}
  #registrar {display: flex; justify-content: space-around;margin: 0.5em}
  #renglon {display: flex; justify-content: space-around;}
  #imagen {display: flex; justify-content: space-around;margin: 1em}
  #botones {display: flex; justify-content: space-around;}
  </style>
  </head>
  <body>
    <div id="botones">
    <div id="inicio">
      <button><a href="index.php">Iniciar Sesión</a></button>
    </div>
  </div>
    <div id="imagen">
      <img src="spidey.jpg">
    </div>
    <form action="registrado.php" method="post">
    <div id="registro">
      <div id="caja">
        <div id=renglon>
          <div class="label"><label><strong>Usuario:</strong></label></div>
        </div>
        <div id=renglon>
          <div class="inputs"><input type="text" name="login" value=""></div>
        </div>
      </div>
      <div id="caja">
        <div id=renglon>
          <div class="label"><label><strong>Contraseña:</strong></label></div>
        </div>
        <div id=renglon>
          <div class="inputs"><input type="password" name="password" value=""></div>
        </div>
      </div>
      <div class="caja">
        <div id=renglon>
          <div class="label"><label><strong>Confirmar contraseña:</strong></label></div>
        </div>
        <div id=renglon>
          <div class="inputs"><input type="password" name="confirmar" value=""></div>
        </div>
      </div>
      <div id="registrar">
        <div id="boton"><button>Registarse</button></div>
      </div>
    </div>
  </form>
  </body>
</html>
