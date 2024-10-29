<?php

//Incluyo aqui mi archivo donde me cree mi clase

require_once "Tarea2_6Clases.php";

#Instancio 10 objetos de piezasMusicales

$piezaUno = new piezasMusicales ("Musica clasica","Clair de Lune","Claude Debussy");
$piezaDos = new piezasMusicales ("Musica clasica","The Four Seasons", "Antonio Vivaldi");
$piezaTres = new piezasMusicales ("Musica moderna","Rhapsody in Blue", "George Gershwin");
$piezaCuatro = new piezasMusicales ("Musica moderna", "Boléro","Maurice Ravel");
$piezaCinco = new piezasMusicales ("Musica moderna","Adagio for Strings","Samuel Barber");
$piezaSeis = new piezasMusicales ("Musica actual", "Vivir mi vida","Marc Anthony");
$piezaSiete = new piezasMusicales ("Musica actual", "El Cantante", "Héctor Lavoe" );
$piezaOcho= new piezasMusicales ("Musica actual", "Propuesta Indecente", " Romeo Santos");
$piezaNueve = new piezasMusicales ("Musica actual", "Te regalo" , " Prince Royce");
$piezaDiez = new piezasMusicales ("Musica actual", "Tusa" , "Karol G");


#La aplicación presentará toda la información disponible de los 10 objetos. La presentación debe ser en formato lista o en formato tabla.

$arrayDePiezas= array($piezaUno,$piezaDos,$piezaTres,$piezaCuatro,$piezaCinco,$piezaSeis,$piezaSiete, $piezaOcho, $piezaNueve, $piezaDiez);

echo "<ul>";

foreach ($arrayDePiezas as $pieza){

    echo "<li>";
    echo "Tipo de musica: " .$pieza-> getTipoDePiezaMusical() . "<br>";
    echo "Nombre de pieza musical: " .$pieza -> getNombrePiezaMusical() . "<br>";
    echo "Autor de pieza musical: " .$pieza -> getAutorPiezaMusical() . "<br>";
}

echo "</ul>";


#Incluyo un fragmento de la pieza musical en archivo de audio o de vídeo.
#NOTA: No se reproduce el video ya que tiene restricciones por parte de los propietarios


echo '<iframe width="560" height= "315" src="https://www.youtube.com/embed/8lYAVMQKFIw&ab"></iframe>';



?>
