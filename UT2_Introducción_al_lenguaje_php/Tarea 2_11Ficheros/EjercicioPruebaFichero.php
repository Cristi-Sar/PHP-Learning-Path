<?php

$importoFichero = file_get_contents("Frutas.txt");  

$contenido = explode(",", $importoFichero);  

print_r($contenido);



?>