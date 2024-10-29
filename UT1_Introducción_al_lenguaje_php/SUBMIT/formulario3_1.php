<?php
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] == "GET"){    //Si el metodo que recibimos del formulario es GET se ejecuta el bloque de codigo
    if(!empty($_GET['saludo'] == "Hola")){  //Si el valor de la variable saludo no es igual a Hola muestra un error
        echo "Saludo: " . htmlspecialchars($_GET['saludo']) . "<br>";
    }else{
        echo"Error, ejemplo de saludo 'Hola'";
    }
}else{
    echo"Error al anvíar el formulario";
}


?>