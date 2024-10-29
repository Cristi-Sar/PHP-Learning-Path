<?php



#Al comienzo del script, informar de la memoria usada inicialmente m1.

$m1 = memory_get_usage();

echo "Memoria usada inicialmente: " .$m1 . " bytes<br>";


#Crear un array de, al menos, 20 números e informar de la memoria usada hasta el momento m2.

$numero = array ();

for ($i = 0; $i <= 20; $i++){
     
    $numero[] = $i;

}

foreach ($numero as $valor){

    echo $valor . " ";
}

echo "<br>";

$m2 = memory_get_usage();
echo "Memoria usada despues de crear el array  " . $m2 . " bytes<br>";

#Informar del incremento de memoria m2 - m1.

$incrementoDeMemoria = $m1 - $m2;

echo "Incremento de memoria m2 - m1: " . $incrementoDeMemoria . " bytes<br>";


#Limpiar la memoria antes de terminar el script y volver a informar de la memoria usada en este momento m3


unset($numero);


$m3 = memory_get_usage();

echo "Memoria usada despues de limpiar el array m3: " . $m3 . " bytes<br>";

















?>