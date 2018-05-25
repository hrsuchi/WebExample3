<?php
  //EMAIL
  $evento = $_POST['evento'];
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $lugares = $_POST['lugares'];

  //PARQUEOS
  $parquno ="algun lugar:  Q.10.00 Tarifa única";
  $parqdos ="algun lugar: Q.20.00 Tarifa única";
  $parqtres ="algun lugar: Q.30.00 Tarifa única";
  $parqcuatro ="algun lugar: Parqueo sobre la Calle. Favor comprar Marbete";

  $cuerpomensaje = "<br>Información de reserva:<br>Evento: $evento<br>Persona que reserva: $nombre<br>Teléfono: $telefono<br>Cantidad de lugares: ".$lugares;
  $wsdl = "http://example.com/ws/ws_correo.php?wsdl";
	$email_rev = "sender@domain.net";
	$name_rev = "Sender";
	//========= info contact ==========
	$asunto_texto = "Reserva";
	$parametros = array(
			'nombre' => $name_rev,
			'nombre_remitente' => 'Sitio webexample3.org',
			'correo' => $email_rev,
			'correo_remitente' => 'webexample3@domain.net',
			'asunto' => $asunto_texto,
			'mensaje' => $cuerpomensaje
	);
	$email_rev = "someone1@domain2.com.gt";
	$name_rev = "someone1";
	//========= info contact ==========
	$asunto_texto = "Reserva";
	$parametros = array(
			'nombre' => $name_rev,
			'nombre_remitente' => 'Sitio webexample3.org',
			'correo' => $email_rev,
			'correo_remitente' => 'webexample3@domain.net',
			'asunto' => $asunto_texto,
			'mensaje' => $cuerpomensaje
	);

	$email_rev = "someone3@domain2.com.gt";
	$name_rev = "someone3";
	//========= info contact ==========
	$asunto_texto = "Reserva";
	$parametros = array(
			'nombre' => $name_rev,
			'nombre_remitente' => 'Sitio webexample3.org',
			'correo' => $email_rev,
			'correo_remitente' => 'webexample3@domain.net',
			'asunto' => $asunto_texto,
			'mensaje' => $cuerpomensaje
	);
	//PDF
	require('fpdf/fpdf.php');
  //$imgsrc ="http://".$_SERVER['HTTP_HOST']."/img/pdfsindatos.png";
  $imgsrc ="img/pdfsindatos.png";
  $pdf=new FPDF('P','pt','Letter');
  $pdf->SetTitle("Voucher");
  $pdf->AddPage();
  $pdf->SetFont('Arial','',16);
  $pdf->Image($imgsrc,0,0,630);
  $pdf->Text(105,400,$evento);
  $pdf->SetFont('Arial','',12);
  $pdf->Text(250,426,$nombre);
  $pdf->Text(310,445,$lugares);
  if($evento == "Domingo 2 de Octubre, 16:00, El Tenedor del Cerro (Capilla)."){
  	$pdf->Text(135,700,utf8_decode($parquno));
  }else if($evento == "Lunes 3 de Octubre, 18:45, Teatro Dick Smith (IGA)."){
		$pdf->Text(135,700,utf8_decode($parqdos));
	}else if($evento == "Martes 4 de Octubre, 18:45, Solo Teatro Las Americas."){
		$pdf->Text(135,700,utf8_decode($parqtres));
	}else if($evento == "Sábado 8 de Octubre, 11:00 am, Catedral de Old AlgunLugar."){
		$pdf->Text(135,700,utf8_decode($parqcuatro));
	}
  $pdf->Output('doc.pdf','I');
?>
