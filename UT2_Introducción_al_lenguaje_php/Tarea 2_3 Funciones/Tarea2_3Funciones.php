<?php

/*
Escribe una función para calcular factorial de un número, que recibirá como argumento. Devuelve el factorial pero si el argumento no es válido devuelve -1.

*/


function calculaFactorial ($numero){

#Decimos que si no ! es un numero , o numero es que 0 que returne -1
 
if (!is_int($numero) || $numero < 0){

    return -1;    
}


#Segunda validación, verificamos que el numero no sea un cero

if ($numero == 0){

    return -1;
}

#Por último decimos que resultado empieza en 1.

$resultado = 1;

/*
Hacemos un bucle for qu empieza en uno y hasta que no sea menor o igual que el parametro, que  aumente el contador
Por ejemplo el bucel empieza en 1 y hemos recibido por parametro un 5, pues decimos en la condición del bucle es que 
hasta el numero no sea menor que uno que se siga ejecutando lo que esta dentro del bucle.

 5 es nuestro factorial 5!= 5x4x3x2x1
 y empieza en uno porque es hasta donde llega

*/


for ($i = 1; $i <= $numero; $i++){
         
    $resultado *= $i;      # Y aqui se esta ejecutando de la siguiente manera: 1(resultado) =  1(resultado)*5*4*3*2*1   
}

return $resultado;

}


echo "El resultado del factorial de 5 es:" .(calculaFactorial(5). "<br>");
echo "El resultado del factorial de -3 es:" .(calculaFactorial(-3). "<br>");
echo "El resultado del factorial de 3.5 es:" .(calculaFactorial(3.5). "<br>");


?>