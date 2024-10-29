<?php

error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /*
    Si no esta vacia la variable que recibimos a traves del POST del formulario se ejecuta, el bloque de codigo dentro del if
    */
    if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) { 
        echo "Nombre: " . htmlspecialchars($_POST['nombre']) . "<br>"; //htmlspcialchars que convierte caracteres como ('') en entidades HTML y previene de ataques.
        echo "Apellido: " . htmlspecialchars($_POST['apellido']) . "<br>";

        if (!empty($_POST['clave'])) { //Si la variable clave no esta vacia 
            if ($_POST['clave'] == "1234") { //Y la clave es igual a 1234 que muestre un mensaje y sino que muestre un error
                echo "Clave correcta: " . htmlspecialchars($_POST['clave']) . "<br>";
            } else {
                echo "Error, clave incorrecta ;( intentalo de nuevo<br>";
            }
        } else {
            echo "Error, introduce una clave.<br>"; //Y si esta vacia que muestre un mensaje
        }

        if (!empty($_POST['email'])) {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { //Filter_var sirve para filtrar todo tipo de datos como correos, numeros, IP etc y luego FILTER_VALIDATE_EMAIL
                echo "Email correcto: " . htmlspecialchars($_POST['email']) . "<br>"; //Valida si es un correo valido
            } else {
                echo "Introduce por favor un correo válido.<br>";
            }

            if(!empty($_POST['telefono'])){  //Lo mismo con el telefono, si no esta vacio el campo que muestre el telefono
                if (is_numeric($_POST['telefono'])){  //Esta funcion de PHP que encontre valida si un dato es un numero 
                    echo "Teléfono: " .  htmlspecialchars($_POST['telefono']) . "<br>";
                }
            }
        } else {
            echo "Error, introduce un correo electrónico.<br>";
        }
    } else {
        echo "Error, introduce un nombre y un apellido.<br>";
    }
} else {
    echo "Error al enviar formulario.<br>";
}

?>