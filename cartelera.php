<?php
require('header.php');
?>
<?php
require('lang.php');
?>
<main id="content">
<header>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <!--Slide-->
    <div class="item active">
      <img class="imgcarousel" src="img/Agnikanas-group2.1.jpg">
      <div class="infdiv">
        <div style="width:100%">
          <center>
            <h1>Capilla del Cerro</h1>
            Callejón La Joya, lote #10<br>
            Santa del Monte Pulciano Km. 42.5<br>
            Old AlgunLugar<br>
            Concierto Domingo 02 de octubre de 2016<br>
            Hora 10:00 am
          </center>
        </div>
        <div style="width:0%">
        </div>
      </div>
      <div class="carousel-caption">
      </div>
    </div>
    <!--/Slide-->
    <!--Slide-->
     <div class="item">
      <img class="imgcarousel" src="img/Agnikanas-group2.1.jpg">
      <div class="infdiv">
        <div style="width:100%">
          <center>
            <h1>Instituto Guatemalteco Americano IGA</h1>
            Ruta 1 4-05, Zona 4<br>
            01104 AlgunLugar<br>
            Teatro Dick Smith
            Concierto al público<br>
            Lunes 03 de octubre de 2016<br>
            Hora 6:45 pm
          </center>
        </div>
        <div style="width:0%">
        </div>
      </div>
      <div class="carousel-caption">
      </div>
    </div>
    <!--/Slide-->
    <!--Slide-->
    <div class="item">
      <img class="imgcarousel" src="img/Agnikanas-group2.1.jpg">
      <div class="infdiv">
        <div style="width:100%">
          <center>
            <h1>Solo Teatro</h1>
            Avenida Las Américas 7-20, Zona 13<br>
            Centro Comercial Real América<br>
            01013 AlgunLugar<br>
            Concierto al público<br>
            Martes 04 de octubre de 2016<br>
            Hora 07:00 pm

          </center>
        </div>
        <div style="width:0%">
        </div>
      </div>
      <div class="carousel-caption">
      </div>
    </div>
    <!--/Slide-->
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</header>


<section class="cartelera container text-center" >
  <h3>PRÓXIMOS CONCIERTOS</h3>

  <div class="row eventrow">

  <div class="cartelera col-md-3 col-sm-6 text-left">
      <a href="proximos_eventos.php">
        <img class="imgevent" src="img/agnicanas4web.png">
        <h4><strong>Concierto de GRUPO MUSICAL</strong></h4>
        <p><strong>Lugar:</strong> El Tenedor del Cerro (Interior de la Capilla) Cerro de Santa Inés, Old AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong>Domingo 2 de octubre, 16:00hrs</p>
      </a>
    </div>

    <div class="cartelera col-md-3 col-sm-6 text-left">
      <a href="proximos_eventos.php">
        <img class="imgevent" src="img/agnicanas4web.png">
        <h4><strong>Concierto de GRUPO MUSICAL</strong></h4>
        <p><strong>Lugar:</strong> Teatro Dick Smith (IGA), Ruta 1, 4-05 Zona 4, Ciudad de AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong>Lunes 3 de octubre, 18:45hrs.</p>
      </a>
    </div>

    <div class="cartelera col-md-3 col-sm-6 text-left">
      <a href="proximos_eventos.php">
        <img class="imgevent" src="img/agnicanas4web.png">
        <h4><strong>Concierto de GRUPO MUSICAL</strong></h4>
        <p><strong>Lugar:</strong> Solo Teatro Centro Comercial Real América, Avenida Las Americas 7-20,Ciudad de AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong>Martes 4 de octubre, 18:45hrs.</p>
      </a>
    </div>

   <div class="cartelera col-md-3 col-sm-6 text-left">
      <a href="proximos_eventos.php">
        <img class="imgevent" src="img/agnicanas4web.png">
        <h4><strong>Concierto de GRUPO MUSICAL</strong></h4>
        <p><strong>Lugar:</strong> Old AlgunLugar, Catedral Old AlgunLugar Dirección: 5 Calle Oriente, Frente al Parque Central.</p>
        <p><strong>Fecha y Hora: </strong>Sábado 8 de octubre, 11:00hrs.</p>
      </a>
    </div>

    <!--<div class="cartelera col-md-4 col-sm-6 text-left">
      <a href="">
        <img class="eventimg" src="img/EJEMPLO1.png">
        <h4>Evento de Cantos Mántricos con Migdalia's Grouop</h4>
        <p><strong>Lugar:</strong> Casa Santo Domingo, Old AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong> Lunes 30 de febrero, 15:00 horas.</p>
      </a>
    </div>

    <div class="cartelera col-md-4 col-sm-6 text-left">
      <a href="">
        <img class="eventimg" src="img/EJEMPLO1.png">
        <h4>Evento de Cantos Mántricos con Migdalia's Grouop</h4>
        <p><strong>Lugar:</strong> Casa Santo Domingo, Old AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong> Lunes 30 de febrero, 15:00 horas.</p>
      </a>
    </div>

    <div class="cartelera col-md-4 col-sm-6 text-left">
      <a href="">
        <img class="eventimg" src="img/EJEMPLO1.png">
>>>>>>> refs/remotes/origin/master
        <h4>Evento de Cantos Mántricos con Migdalia's Grouop</h4>
        <p><strong>Lugar:</strong> Casa Santo Domingo, Old AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong> Lunes 30 de febrero, 15:00 horas.</p>
      </a>
    </div>-->


<!--/////////////////////////////////EVENTOS PASADOS///////////////////////////////////////-->

<!--<section class="cartelera container text-center" >
  <h3>EVENTOS ANTERIORES</h3>

  <div class="row eventrow">

    <div class="cartelera col-md-4 col-sm-6 text-left">
      <a href="">
        <img class="eventimg" src="img/EJEMPLO1.png">
        <h4>Evento de Cantos Mántricos con Migdalia's Grouop</h4>
        <p><strong>Lugar:</strong> Casa Santo Domingo, Old AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong> Lunes 30 de febrero, 15:00 horas.</p>
      </a>
    </div>

    <div class="cartelera col-md-4 col-sm-6 text-left">
      <a href="">
        <img class="eventimg" src="img/EJEMPLO1.png">
        <h4>Evento de Cantos Mántricos con Migdalia's Grouop</h4>
        <p><strong>Lugar:</strong> Casa Santo Domingo, Old AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong> Lunes 30 de febrero, 15:00 horas.</p>
      </a>
    </div>

    <div class="cartelera col-md-4 col-sm-6 text-left">
      <a href="">
        <img class="eventimg" src="img/EJEMPLO1.png">
        <h4>Evento de Cantos Mántricos con Migdalia's Grouop</h4>
        <p><strong>Lugar:</strong> Casa Santo Domingo, Old AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong> Lunes 30 de febrero, 15:00 horas.</p>
      </a>
    </div>


    <div class="cartelera col-md-4 col-sm-6 text-left">
      <a href="">
        <img class="eventimg" src="img/EJEMPLO1.png">
        <h4>Evento de Cantos Mántricos con Migdalia's Grouop</h4>
        <p><strong>Lugar:</strong> Casa Santo Domingo, Old AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong> Lunes 30 de febrero, 15:00 horas.</p>
      </a>
    </div>

    <div class="cartelera col-md-4 col-sm-6 text-left">
      <a href="">
        <img class="eventimg" src="img/EJEMPLO1.png">
        <h4>Evento de Cantos Mántricos con Migdalia's Grouop</h4>
        <p><strong>Lugar:</strong> Casa Santo Domingo, Old AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong> Lunes 30 de febrero, 15:00 horas.</p>
      </a>
    </div>

    <div class="cartelera col-md-4 col-sm-6 text-left">
      <a href="">
        <img class="eventimg" src="img/EJEMPLO1.png">
        <h4>Evento de Cantos Mántricos con Migdalia's Grouop</h4>
        <p><strong>Lugar:</strong> Casa Santo Domingo, Old AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong> Lunes 30 de febrero, 15:00 horas.</p>
      </a>
    </div>

  </div>

</section>-->
</main>
<?php
require('footer.php');
?>
