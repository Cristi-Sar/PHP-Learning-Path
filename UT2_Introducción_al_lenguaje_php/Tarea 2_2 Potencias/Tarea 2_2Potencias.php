
<?php

/*
Escribe una función para calcular potencias que recibirá como argumentos la base y el exponente. 
El exponente es opcional y tiene valor por defecto 2 (elevar al cuadrado).

Se crea una función que calcule potencias, para calcular potencias tenemos que saber
que este programa es igual que decir 
base = 2;
exponente = 4;

El exponente le va a decir a la base cuantas veces se va a multiplicar por si mismo

entonces seria ---> 2*2*2*2 = 16;

*/

function calculaPotencia ($base,$exponente = 2){

$resultado = 1;


for ($i = 1;  $i<= $exponente; $i++){  #Se hace un bucle que empieza en 1 y hasta que no sea menor o igual que el exponente que no deje de multiplicar porque cuando 
                                       #el exponente termine llegue a uno allí acabara la operación

    $resultado *= $base;   #Aqui es como decir que resultado = resultado*base

}

return $resultado;

}


echo "El resultado de 4^2 es: " .(calculaPotencia(4).  "<br>");
echo "El resultado de 6^2 es: " .(calculaPotencia(6)). "<br>";



?>