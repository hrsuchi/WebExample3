<?php
require('header.php');
?>
<?php
require('lang.php');
?>
<main id="content">
<!-- CONTENT -->
<div class="container text-center">
  <h2 id="titularacutal" >RESERVACIÓN DE LUGARES</h2>

  <p>La entrada a los conciertos es libre de costo, únicamente necesitas el voucher de confirmación para poder ingresar a cualquiera de los eventos, puedes llevarlo impreso o en tu celular. Ya que el espacio es limitado, por favor, solicita únicamente el número de entradas que necesitas, así permitirás que más personas asistan al concierto de su elección.</p>

</div>


<div class="container descriptionevent text-center">

  <div class="col-md-6 col-sm-12">
    <img class="imgevent" src="img/agnicanas4web.png">
  </div>

  <div class="col-md-6 col-sm-12">
    <h3 class="concertitulo text-left"><strong>GRUPO MUSICAL (ESTO GENERARÁ UN PDF)</strong></h3>

    <br/>

    <form method="post" action="pdf.php" target="_blank">
      <select name="evento">
        <option value="Domingo 2 de Octubre, 16:00, El Tenedor del Cerro (Capilla).">
          Domingo 2 de Octubre, 16:00, El Tenedor del Cerro (Capilla).
        </option>
        <option value="Lunes 3 de Octubre, 18:45, Teatro Dick Smith (IGA).">
          Lunes 3 de Octubre, 18:45, Teatro Dick Smith (IGA).
        </option>
        <option value="Martes 4 de Octubre, 18:45, Solo Teatro Las Americas.">
          Martes 4 de Octubre, 18:45, Solo Teatro Las Americas.
        </option>
        <option value="Sábado 8 de Octubre, 11:00 am, Catedral de Old AlgunLugar.">
          Sábado 8 de Octubre, 11:00 am, Catedral de Old AlgunLugar.
        </option>
      </select>
      <input name="nombre" type="text" class="form-control" placeholder="Nombre Completo" aria-describedby="basic-addon1" required>
      <input name="telefono" type="tel" class="form-control" placeholder="Número telefónico" aria-describedby="basic-addon1" required>
      <input name="lugares" type="number" min="0" class="form-control" placeholder="Cuantos lugares necesitas?" aria-describedby="basic-addon1" required>
      <p><input type="checkbox" name="name" value="" required> declaro que he leído y acepto los <a href="#">términos y condiciones.</a></p>
      <p>Esto generará un PDF</p>
      <input type="submit" class="btn-header btn btn-primary btn-lg" value="Reservar lugar">

    </form>

    <br/>

  </div>



</div>


<!--//////////////////////////////PROXIMOS CONCIERTOS////////////////////////////////////-->

<!--<div class="container"><div class="row eventrow">

   <h3>PROXIMOS CONCIERTOS</h3>

    <div class="cartelera col-md-4 col-sm-6 text-left">
      <a href="proximos_eventos.php">
        <img class="eventimg" src="img/EJEMPLO1.png">
        <h4>Evento de Cantos Mántricos con Migdalia's Grouop</h4>
        <p><strong>Lugar:</strong> Casa Santo Domingo, Old AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong> Lunes 30 de febrero, 15:00 horas.</p>
      </a>
    </div>

    <div class="cartelera col-md-4 col-sm-6 text-left">
      <a href="proximos_eventos.php">
        <img class="eventimg" src="img/EJEMPLO1.png">
        <h4>Evento de Cantos Mántricos con Migdalia's Grouop</h4>
        <p><strong>Lugar:</strong> Casa Santo Domingo, Old AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong> Lunes 30 de febrero, 15:00 horas.</p>
      </a>
    </div>

    <div class="cartelera col-md-4 col-sm-6 text-left">
      <a href="proximos_eventos.php">
        <img class="eventimg" src="img/EJEMPLO1.png">
        <h4>Evento de Cantos Mántricos con Migdalia's Grouop</h4>
        <p><strong>Lugar:</strong> Casa Santo Domingo, Old AlgunLugar</p>
        <p><strong>Fecha y Hora: </strong> Lunes 30 de febrero, 15:00 horas.</p>
      </a>
    </div>

  </div>

</div>-->

<!-- /CONTENT -->
</main>
<?php
require('footer.php');
?>
