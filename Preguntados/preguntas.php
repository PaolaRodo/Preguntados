<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Preguntados: Marvel</title>
    <style>
    * {margin:0; padding:0; text-align: center;}
    #titulo {background: url("Marvel.png")no-repeat; background-size: 100%; height: 545px; display: flex; justify-content: space-around;}
    p {font-size: 40px; text-align: center;}
    button {font-size: 35px; background: black; color:white;}
    a {text-decoration: none; color:white;}
    button:hover {background: #ED1E25; color:black; transition: 0.3s all ease; }
    #pregunta1 {margin: 1rem; border: 4px solid black; background: #DFDFDF; display:none; width:95%}
    #pregunta2 {margin: 1rem; border: 4px solid black; background: #DFDFDF; display:none; width:95%}
    #pregunta3 {margin: 1rem; border: 4px solid black; background: #DFDFDF; display:none; width:95%}
    #pregunta4 {margin: 1rem; border: 4px solid black; background: #DFDFDF; display:none; width:95%}
    #pregunta5 {margin: 1rem; border: 4px solid black; background: #DFDFDF; display:none; width:95%}
    #pregunta6 {margin: 1rem; border: 4px solid black; background: #DFDFDF; display:none; width:95%}
    #pregunta7 {margin: 1rem; border: 4px solid black; background: #DFDFDF; display:none; width:95%}
    #pregunta8 {margin: 1rem; border: 4px solid black; background: #DFDFDF; display:none; width:95%}
    #pregunta9 {margin: 1rem; border: 4px solid black; background: #DFDFDF; display:none; width:95%}
    #pregunta10 {margin: 1rem; border: 4px solid black; background: #DFDFDF; display:none;width:95%}
    #res {display:none; margin:0.5em}
    #valores {display:none;}
    #respuestas {display: flex; justify-content: space-around; margin: 1rem;}
    #conf{background: #ED1E25; border: #ED1E25; margin: 0.5em}
    #conf img {width: 50px; height: 50px}
    img {width: 200px; height: 200px;}
    #boton {width: 60%;}
    #caja {display: flex; justify-content: space-around;}
    #final {display: flex; justify-content: space-around; margin: 2rem}
    #juego {display: flex; justify-content: space-around; margin: 2rem}
    #vacio {width:100%}
    </style>
    <script>
    var puntaje=0
    var pregunta1
    var pregunta2
    var pregunta3
    var pregunta4
    var pregunta5
    var pregunta6
    var pregunta7
    var pregunta8
    var pregunta9
    var pregunta10
    function empezar(){
      document.getElementById("pregunta1").style.display = "inline-block"
      document.getElementById("juego").style.display = "none"
    }
    function incorrecta1() {
      pregunta1 = "Incorrecta"
      document.getElementById("pregunta2").style.display = "inline-block"
      document.getElementById("pregunta1").style.display = "none"
    }
    function correcta1() {
    puntaje = puntaje + 1
    pregunta1 = "Correcta"
    document.getElementById("pregunta2").style.display = "inline-block"
    document.getElementById("pregunta1").style.display = "none"
    }
    function incorrecta2() {
      pregunta2 = "Incorrecta"
      document.getElementById("pregunta3").style.display = "inline-block"
      document.getElementById("pregunta2").style.display = "none"
    }
    function correcta2() {
    pregunta2 = "Correcta"
    puntaje = puntaje + 1
    document.getElementById("pregunta3").style.display = "inline-block"
    document.getElementById("pregunta2").style.display = "none"
    }
    function incorrecta3() {
      pregunta3 = "Incorrecta"
      document.getElementById("pregunta4").style.display = "inline-block"
      document.getElementById("pregunta3").style.display = "none"
    }
    function correcta3() {
    pregunta3 = "Correcta"
    puntaje = puntaje + 1
    document.getElementById("pregunta4").style.display = "inline-block"
    document.getElementById("pregunta3").style.display = "none"
    }
    function incorrecta4() {
      pregunta4 = "Incorrecta"
      document.getElementById("pregunta5").style.display = "inline-block"
      document.getElementById("pregunta4").style.display = "none"
    }
    function correcta4() {
    pregunta4 = "Correcta"
    puntaje = puntaje + 1
    document.getElementById("pregunta5").style.display = "inline-block"
    document.getElementById("pregunta4").style.display = "none"
    }
    function incorrecta5() {
      pregunta5 = "Incorrecta"
      document.getElementById("pregunta6").style.display = "inline-block"
      document.getElementById("pregunta5").style.display = "none"
    }
    function correcta5() {
    pregunta5 = "Correcta"
    puntaje = puntaje + 1
    document.getElementById("pregunta6").style.display = "inline-block"
    document.getElementById("pregunta5").style.display = "none"
    }
    function incorrecta6() {
      pregunta6 = "Incorrecta"
      document.getElementById("pregunta7").style.display = "inline-block"
      document.getElementById("pregunta6").style.display = "none"
    }
    function correcta6() {
    pregunta6 = "Correcta"
    puntaje = puntaje + 1
    document.getElementById("pregunta7").style.display = "inline-block"
    document.getElementById("pregunta6").style.display = "none"
    }
    function incorrecta7() {
      pregunta7 = "Incorrecta"
      document.getElementById("pregunta8").style.display = "inline-block"
      document.getElementById("pregunta7").style.display = "none"
    }
    function correcta7() {
    pregunta7 = "Correcta"
    puntaje = puntaje + 1
    document.getElementById("pregunta8").style.display = "inline-block"
    document.getElementById("pregunta7").style.display = "none"
    }
    function incorrecta8() {
      pregunta8 = "Incorrecta"
      document.getElementById("pregunta9").style.display = "inline-block"
      document.getElementById("pregunta8").style.display = "none"
    }
    function correcta8() {
    puntaje = puntaje + 1
    pregunta8 = "Correcta"
    document.getElementById("pregunta9").style.display = "inline-block"
    document.getElementById("pregunta8").style.display = "none"
    }
    function incorrecta9() {
      pregunta9 = "Incorrecta"
      document.getElementById("pregunta10").style.display = "inline-block"
      document.getElementById("pregunta9").style.display = "none"
    }
    function correcta9() {
    pregunta9 = "Correcta"
    puntaje = puntaje + 1
    document.getElementById("pregunta10").style.display = "inline-block"
    document.getElementById("pregunta9").style.display = "none"
    }
    function incorrecta10() {
      pregunta10 = "Incorrecta"
      document.getElementById("res").style.display = "inline-block"
      document.getElementById("pregunta10").style.display = "none"
      document.getElementById("Score").value = puntaje;
      document.getElementById("p1").value = pregunta1;
      document.getElementById("p2").value = pregunta2;
      document.getElementById("p3").value = pregunta3;
      document.getElementById("p4").value = pregunta4;
      document.getElementById("p5").value = pregunta5;
      document.getElementById("p6").value = pregunta6;
      document.getElementById("p7").value = pregunta7;
      document.getElementById("p8").value = pregunta8;
      document.getElementById("p9").value = pregunta9;
      document.getElementById("p10").value = pregunta10;
    }
    function correcta10() {
    pregunta10 = "Correcta"
    puntaje = puntaje + 1
    document.getElementById("res").style.display = "inline-block"
    document.getElementById("pregunta10").style.display = "none"
    document.getElementById("Score").value = puntaje;
    document.getElementById("p1").value = pregunta1;
    document.getElementById("p2").value = pregunta2;
    document.getElementById("p3").value = pregunta3;
    document.getElementById("p4").value = pregunta4;
    document.getElementById("p5").value = pregunta5;
    document.getElementById("p6").value = pregunta6;
    document.getElementById("p7").value = pregunta7;
    document.getElementById("p8").value = pregunta8;
    document.getElementById("p9").value = pregunta9;
    document.getElementById("p10").value = pregunta10;
    }
    </script>
  </head>
  <body>
    <div id="titulo">
      <div id="vacio"></div>
      <div id="configuracion">
        <?php
        echo "<button id=conf><a href=modificar.php?usuario=".$_GET["login"]."><img src=configuracion.png></a></button>";
        ?>
      </div>
    </div>
    <div id="juego">
    <div id="boton"><button onclick=empezar()>Empezar</button></div>
  </div>
  </div>
    <div id="pregunta1">
      <p>1- ¿De que color es la gema del alma?</p>
      <div id="respuestas">
      <div id="opciones"><button id="incorrecta" onclick="incorrecta1()">Roja</button></div>
      <div id="opciones"><button id="incorrecta" onclick="incorrecta1()">Azul</button></div>
      <div id="opciones"><button id="incorrecta" onclick="incorrecta1()">Verde</button></div>
      <div id="opciones"><button id="correcta" onclick="correcta1()">Naranja</button></div>
    </div>
  </div>
<div id="pregunta2">
  <div id="caja"><div id="imagen"><img src="Teseracto.png"></div></div>
  <p>2- ¿Cuál es el nombre de esta gema?</p>
  <div id="respuestas">
  <div id="opciones"><button id="incorrecta" onclick="incorrecta2()">Aether</button></div>
  <div id="opciones"><button id="incorrecta" onclick="incorrecta2()">Orbe</button></div>
  <div id="opciones"><button id="correcta" onclick="correcta2()">Teseracto</button></div>
  <div id="opciones"><button id="incorrecta" onclick="incorrecta2()">Ojo de Agamoto</button></div>
</div>
</div>
<div id="pregunta3">
  <p>3- ¿A qué vengador le dicen "Beach boy"?</p>
  <div id="respuestas">
  <div id="opciones"><button id="incorrecta1" onclick="incorrecta3()">Iron Man</button></div>
  <div id="opciones"><button id="correcta" onclick="correcta3()">Thor</button></div>
  <div id="opciones"><button id="incorrecta2" onclick="incorrecta3()">Hulk</button></div>
  <div id="opciones"><button id="incorrecta3" onclick="incorrecta3()">Capitán America</button></div>
</div>
</div>
<div id="pregunta4">
  <div id="caja"><div id="imagen"><img src="Spiderman.jpg"></div></div>
  <p>4- Primera película en la que sale Spiderman:</p>
  <div id="respuestas">
  <div id="opciones"><button id="correcta" onclick="correcta4()">Civil War</button></div>
  <div id="opciones"><button id="incorrecta1" onclick="incorrecta4()">Spiderman: Homecoming</button></div>
  <div id="opciones"><button id="incorrecta2" onclick="incorrecta4()">Avengers Infinity War</button></div>
  <div id="opciones"><button id="incorrecta3" onclick="incorrecta4()">Avengers Endgame</button></div>
</div>
</div>
<div id="pregunta5">
  <div id="caja"><div id="imagen"><img src="gemamente.jpg"></div></div>
  <p>5- ¿Quién tiene la gema de la mente?</p>
  <div id="respuestas">
  <div id="opciones"><button id="incorrecta1" onclick="incorrecta5()">Nick Fury</button></div>
  <div id="opciones"><button id="incorrecta2" onclick="incorrecta5()">Thor</button></div>
  <div id="opciones"><button id="correcta" onclick="correcta5()">Visión</button></div>
  <div id="opciones"><button id="incorrecta3" onclick="incorrecta5()">El coleccionista</button></div>
</div>
</div>
<div id="pregunta6">
  <div id="caja"><div id="imagen"><img src="Mjolnir.png"></div></div>
  <p>6- ¿Cómo se llama el martillo de Thor?</p>
  <div id="respuestas">
  <div id="opciones"><button id="incorrecta1" onclick="incorrecta6()">Lanzatruenos</button></div>
  <div id="opciones"><button  id="correcta" onclick="correcta6()">Mjolnir</button></div>
  <div id="opciones"><button id="incorrecta2" onclick="incorrecta6()">Jonathan</button></div>
  <div id="opciones"><button id="incorrecta3" onclick="incorrecta6()">Stormbreaker</button></div>
</div>
</div>
<div id="pregunta7">
  <div id="caja"><div id="imagen"><img src="okoye.jpg"></div></div>
  <p>7- ¿Cómo se llama este personaje?</p>
  <div id="respuestas">
  <div id="opciones"><button id="incorrecta1" onclick="incorrecta7()">Shuri</button></div>
  <div id="opciones"><button id="incorrecta2" onclick="incorrecta7()">Zuri</button></div>
  <div id="opciones"><button id="correcta" onclick="correcta7()">Okoye</button></div>
  <div id="opciones"><button id="incorrecta3" onclick="incorrecta7()">Nakia</button></div>
</div>
</div>
<div id="pregunta8">
  <p>8- ¿Cuál es la primera gema que obtiene Thanos?</p>
  <div id="respuestas">
  <div id="opciones"><button id="incorrecta1" onclick="incorrecta8()">Realidad</button></div>
  <div id="opciones"><button id="correcta" onclick="correcta8()">Poder</button></div>
  <div id="opciones"><button id="incorrecta2" onclick="incorrecta8()">Tiempo</button></div>
  <div id="opciones"><button id="incorrecta3" onclick="incorrecta8()">Espacio</button></div>
</div>
</div>
<div id="pregunta9">
  <div id="caja"><div id="imagen"><img src="maximoff.jpg"></div></div>
  <p>9- Apellido de estos hermanos:</p>
  <div id="respuestas">
  <div id="opciones"><button id="incorrecta1" onclick="incorrecta9()">Stark</button></div>
  <div id="opciones"><button id="incorrecta2" onclick="incorrecta9()">Rogers</button></div>
  <div id="opciones"><button id="correcta" onclick="correcta9()">Maximoff</button></div>
  <div id="opciones"><button id="incorrecta3" onclick="incorrecta9()">Baner</button></div>
</div>
</div>
<div id="pregunta10">
  <p>10- ¿Cuál es el metal más fuerte de la tierra?</p>
  <div id="respuestas">
  <div id="opciones"><button id="correcta" onclick="correcta10()">Vibranio</button></div>
  <div id="opciones"><button id="incorrecta1" onclick="incorrecta10()">Adamantio</button></div>
  <div id="opciones"><button id="incorrecta2" onclick="incorrecta10()">Hierro</button></div>
  <div id="opciones"><button id="incorrecta3" onclick="incorrecta10()">Cobre</button></div>
</div>
</div>
  <form action="resultado.php" method="post">
    <div id=valores>
    <input id="Score" name="Score"></input>
    <input id="p1" name="p1"></input>
    <input id="p2" name="p2"></input>
    <input id="p3" name="p3"></input>
    <input id="p4" name="p4"></input>
    <input id="p5" name="p5"></input>
    <input id="p6" name="p6"></input>
    <input id="p7" name="p7"></input>
    <input id="p8" name="p8"></input>
    <input id="p9" name="p9"></input>
    <input id="p10" name="p10"></input>
    <input id="Usuario" name="Usuario" value="<?php echo $_GET["login"];?>"></input>
  </div>
    <div id="res">
      <p>¡Gracias por Jugar!</p>
    <button>Ver resultados</button>
    </div>
</form>
  </body>
</html>
