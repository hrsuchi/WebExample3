<?php
//Lectura de Cookie
if (isset($_COOKIE['idioma'])) {
    if ($_COOKIE['idioma'] == "es") {
        $idioma = "es";
    }else if ($_COOKIE['idioma'] == "en") {
        $idioma = "en";
    }
} else {
    $idioma = "en";
}

if ($idioma == "en") {
    //Ingles
    $setlang = array(
        //'inicio' => "Home"
        //colocar coma (,) para un nuevo valor. Al terminar no hay que colocar coma
        'espanol' => 'Spanish',
        'ingles' => "English"
    );
}else if ($idioma == "es") {
    // Español
    $setlang = array(
        //'inicio' => "Inicio"
        //colocar coma (,) para un nuevo valor. Al terminar no hay que colocar coma
        'espanol' => 'Espa&ntilde;ol',
        'ingles' => "Ingl&eacute;s"
    );
}else {
    //No Definido
    $setlang = array(
      'inicio' => " ",
      
    );
}
?>
<?php //echo $setlang['inicio']; ?>
