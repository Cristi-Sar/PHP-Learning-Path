<?php

/*
Esta funcion permite leer el contenido de un archivo y lo envia directamente a la salida (Lo imprime en pantalla);
*/
readfile('fichero.txt');


#Abrimos el archivo, e informamos si hay un error con el
$archivo = fopen('fichero.txt','r') or die ("Error al abrir el archivo");
fclose($archivo); #Cerramos el archivo

echo "<br>";


echo "<br>";

/*
fread():  Leer el fichero carácter a carácter.
*/

$archivo = fopen('fichero.txt','r');
$contenido = fread($archivo,filesize('fichero.txt'));
fclose($archivo);
echo $contenido;


echo "<br>";


echo "<br>";

/*
fgets() / fgetc(): Lee el fichero campo a campo separado por “ ;”
*/

$archivo = fopen('fichero.txt', 'r');
while (!feof($archivo)) {
    $linea = fgets($archivo);   // Lee linea a linea
    $campos = explode(";", $linea);  // Separa los campos por ";"
    print_r($campos);  // Muestra los campos separados
}
fclose($archivo);
?>