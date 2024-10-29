<?php


function elementosMenoresArray ($numeros = array(1,20,50,4,3), $limite = 20){
 

    $resultado = array();
 
    for ($i = 0; $i < count($numeros); $i++){

        if ($numeros[$i] < $limite) {
                                           // Si es menor, lo agregamos al array de resultados
            $resultado[] = $numeros[$i];
        }


    }


    return $resultado;



}




$numeroMenores = elementosMenoresArray();
print_r($numeroMenores);




?>