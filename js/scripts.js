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