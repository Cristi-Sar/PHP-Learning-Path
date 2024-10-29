<?php

echo '<h2>Tarea 2_5 Arrays</h2>';

#Desarrollar un script PHP que rellene dos arrays con números aleatorios entre 0 y 50. Cada array con 25 elementos.

/*
El script presentara los siguientes resultados.
1- Los valores de un array que existan tambien en el otro.
*/


//Bucle for para rellenar array


$matrizUno = array();   #Me defino dos variable y digo que estas variables son igual al array, es decir en mi variable matrizUno y matrizDos guardare un array
$matrizDos = array();


for ($i = 1; $i <= 25; $i++){   #Mi bucle for empieza en 0  y mientras no sea menor o igual a 25 que aumente el contador
  

      $matrizUno [] = rand(0,50);
      $matrizDos [] = rand(0,50);   #En cada interacción de mi bucle matrizUno y matrizDos que son arrays ira guardando los 
                                    #numeros aleatorios que va a ir gemerando mi funcion rand --> Que sirve para generar numeros aleatorios

}

print "Array Uno <br>";


for ($x = 0; $x < count ($matrizUno); $x++){   #Bucle for empieza en 0 , mientras se menor que matrizUno que aumente el contador
                                               #La funcion count te permite recorrer todo el array
    
    echo $matrizUno [$x] . "<br>";
}



print "Array Dos <br>";

for ($x = 0; $x < count ($matrizDos); $x++){
    
    echo $matrizDos [$x] . "<br>";
}


/*
1. Los valores de un array que existan también en el otro.

Utilizo dos bucles foreach  para recorrer ambas Arrays, dentro esta un echo que lo que hace es que en cada
interacción del bucle los valores que estan en ambas Arrays se van guardando en $valor y se va imprimiendo
*/


print "Valores comunes <br>";

$nuevoArray = array_intersect($matrizUno,$matrizDos);  #Esta funcion te permite buscar los valores comunes en ambas arrays


if (!empty($nuevoArray)){

    foreach ($nuevoArray as $valor){   #Utilizo nuevamente un foreach para imprimir los valores de nuevoArray

        echo $valor . " ";

        echo "<br>";
    
    }
    
}else{
    echo "No hay valores comunes.<br>";
}



/*
2. La suma de todos los valores en cada array.
NOTA: Para ello utilizo la función del manual php.net array_sum();
*/

echo "La suma de matrizUno es: " .array_sum(array: $matrizUno) . "<br>";
echo "La suma de matrizDos es: " .array_sum(array: $matrizDos) . "<br>";
echo "La suma de los elementos que coinciden en el array es: " .array_sum(array: $nuevoArray) . "<br>";

/*
3.Los dos arrays ordenados en orden ascendente.
*/

sort($matrizUno);
echo "Array uno ascendente" , "<br>";

foreach ($matrizUno as $valor){
 echo $valor . " " ;
 
}

echo "<br>";

sort($matrizDos);
echo  "Array dos ascendente ","<br>";

foreach ($matrizDos as $valor){
 echo  $valor . " ";
 
}

echo "<br>";


/*
4.Un nuevo array que combine los dos arrays iniciales, en este caso utilice la funcion print_r para poder ver el array combinado
*/

$resultadoCombinacion = array_merge($matrizUno,$matrizDos);

print "El resultado de ambas combinaciones es: <br>";
print_r($resultadoCombinacion);            

?>
 