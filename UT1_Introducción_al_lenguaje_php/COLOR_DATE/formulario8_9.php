<?php

error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] == "POST"){    //Verificamos si el formulario se ha enviado con el metodo POST y si es asi se ejecuta el bloque dentro del if
    if(isset($_POST['fecha']) && isset($_POST['colores'])){ //Si las variables que recibimos del POST estan definidad y no son null que imprima su valor
        echo "La fecha de hoy es: " . htmlspecialchars($_POST['fecha']) . "<br>";
        echo "El color elegido es: " . htmlspecialchars($_POST['colores']) . "<br>";
    }else{
        echo"Error, valida que los datos esten correctos";   //Si no estan definidas que muestre un mensaje de error.
    }
}else{
    echo "Error de formulario"; //Si el metodo enviado no es POST que muestre un mensaje de error.
} 


?>