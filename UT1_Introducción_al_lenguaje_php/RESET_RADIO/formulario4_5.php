<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

if($_SERVER["REQUEST_METHOD"] == "POST"){ ////Verificamos si el formulario se ha enviado con el metodo POST y si es asi se ejecuta el bloque dentro del if
    if(isset($_POST['comida'])){  //Si la variable esta definida que muestre lo que ha elegido 
        echo "Has elegido: " . htmlspecialchars($_POST['comida']) . "<br>";
    }else{
        echo"Debes elegir una opción"; //Si no muestra un error donde el usuario debe de elegir una opción
    }
}else{
    echo "Error al enviar formulario";
}

?>