//Cookie idioma
function cambiar_idioma(idioma){
  if(idioma=="es")
  {
    document.cookie="idioma = es;";
  }else if(idioma=="en"){
    document.cookie="idioma = en;";
  }
  location.reload();
}
///Cookie idioma

//Nav Active

if (window.location.href.indexOf("cartelera.php") != -1){
  document.write("<style> .nav li:nth-child(1){background:#a2cde2;} .nav li:nth-child(1) a{color:#337ab7;} </style>");
}else if (window.location.href.indexOf("proximos_eventos.php") != -1){
	document.write("<style> .nav li:nth-child(2){background:#a2cde2;} .nav li:nth-child(1) a{color:#337ab7;} </style>");
}else if (window.location.href.indexOf("reserva.php") != -1){
	document.write("<style> .nav li:nth-child(3){background:#a2cde2;} .nav li:nth-child(1) a{color:#337ab7;} </style>");
}
///Nav Active