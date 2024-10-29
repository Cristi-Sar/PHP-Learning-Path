<?php


function esPalindromo ($palabra){

    $palabra = strtolower($palabra);   #Validamos que este en minusculas

    $palabra = str_replace(" ","",$palabra);  #Que no haya espacios

    $palabraInvertida = strrev($palabra);      #Utilizo el metodo strrev


    if ($palabra == $palabraInvertida){       #Hago una condicion si es igual el contenido de amabas palabras se lee tanto de derecha a izquierda de la misma manera que returne true sino false.

        return true;
    }else{
        return false;
    }
}


$palabra = "ana";                       #Hago una prueba para validar que haya funcionado el programa

if (esPalindromo($palabra)) {
    echo "'$palabra' es un palíndromo.";
} else {
    echo "'$palabra' no es un palíndromo.";
}




?>