<?php

/*
Escribe una función para calcular factorial de un número, que recibirá como argumento. Devuelve el factorial pero si el argumento no es válido devuelve -1.
III.- Tarea_2_4B Mejora la tarea 2_3 para que controle si el argumento es negativo, utilizando una excepción.
*/

class FailedFactorial extends Exception {}


function calculaFactorial ($numero){

#Decimos que si no (!) es un numero , o numero es menor que cero que se lance una excepción
 
if (!is_int($numero) || $numero < 0){

     throw new FailedFactorial("Error el factorial debe ser un numero entero, no puede contener caracteres");
}




#Segunda validación, si el numero es 0, por definición el factorial de 0 es 1.

if ($numero == 0){

     return 1;
}



$resultado = 1;



for ($i = 1; $i <= $numero; $i++){
         
    $resultado *= $i;      # Y aqui se esta ejecutando de la siguiente manera: 1(resultado) =  1(resultado)*5*4*3*2*1   
}

return $resultado;

}


try{
echo "El resultado del factorial de 5 es:" .(calculaFactorial(5). "<br>");
}catch (FailedFactorial $e){
    echo "Error capturado" .$e -> getMessage() . "<br>";
}

try{
echo "El resultado del factorial de -3 es:" .(calculaFactorial(-3). "<br>");
    }catch (FailedFactorial $e){
        echo "Error capturado" .$e -> getMessage() . "<br>";
    }
    
try{
echo "El resultado del factorial de 3.5 es:" .(calculaFactorial(3.5). "<br>");
}catch (FailedFactorial $e){
    echo "Error capturado" .$e -> getMessage() . "<br>";
}

echo "El factorial de 0 es: " .calculaFactorial(0). "<br>";
        

?>