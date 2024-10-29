<?php

#I.- Desarrollar una aplicación PHP que gestiones excepciones lanzadas por una función.
#II.- Desarrolla lo anterior con la clase DivisionByZeroError https://www.php.net/manual/es/class.divisionbyzeroerror.php

//Me creo mi nueva excepción personalizada para números negativos 

class ErrorDivisorNegativo extends Exception {}


//Me creo una función para capturar el error de división por cero

function divideDosNumeros ($numeroTres , $numeroCuatro){


    if ($numeroCuatro == 0){

    throw new DivisionByZeroError("No se puede dividir por cero.");
}


//Lanzo excepción personalizada

    if ($numeroCuatro < 0){
     
        throw new ErrorDivisorNegativo("Error, no se puede dividir entre un número negativo");
    }
     
return $resultado = $numeroTres / $numeroCuatro;

}

//Capturo mis dos errores en diferentes operaciones

try {
  
    echo "Resultado de la división 5 / -1: " . divideDosNumeros(5, -1) . "<br>";
  
} catch (ErrorDivisorNegativo $e) {
    // Capturar la excepción de divisor negativo
    echo "Error capturado: " . $e->getMessage() . "<br>";
} catch (DivisionByZeroError $e) {
    // Capturar la excepción de división por cero
    echo "Error capturado: " . $e->getMessage() . "<br>";
}


try {
   
    
    echo "Resultado de la división 5 / 0: " . divideDosNumeros(5, 0) . "<br>";
    
} catch (ErrorDivisorNegativo $e) {
    
    echo "Error capturado: " . $e->getMessage() . "<br>";
} catch (DivisionByZeroError $e) {
   
    echo "Error capturado: " . $e->getMessage() . "<br>";
}


try {
    
    
    echo "Resultado de la división 5 / 2: " . divideDosNumeros(5, 2) . "<br>";
} catch (ErrorDivisorNegativo $e) {
   
    echo "Error capturado: " . $e->getMessage() . "<br>";
} catch (DivisionByZeroError $e) {
    // 
    echo "Error capturado: " . $e->getMessage() . "<br>";
}




?>