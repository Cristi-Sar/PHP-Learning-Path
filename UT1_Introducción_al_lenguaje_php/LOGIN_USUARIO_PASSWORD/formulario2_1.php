<?php

error_reporting(E_ALL);  //Mostramos todos los errores y advertencias
$error = false;    //Me creo una variable error para indicar si ha ocurrido algun error en la autenticacion

if ($_SERVER["REQUEST_METHOD"] == "POST") { //Verificamos si el formulario se ha enviado con el metodo POST y si es asi se ejecuta el bloque dentro del if
    if ($_POST['name'] === "Mercedes Urios" and $_POST['password'] === "1234") {  //Validamos que la entrada tipo text que recibimos del formulario sea igual a los valores presentes.
                header("Location: dashboard.html");  //Si los datos del usuario son correctos. Redirige a la página de dashboard con un mensaje de que lo ha conseguido.
    } else {
        $error = true; //Si son incorrectos digo que mi variable $error que estaba en false sea ahora true (para indicar que hay un error)
        header("Location: formulario2.php?error=1");  //Redirige a la pagina de login con un mensaje de error
        exit(); //Para detener la ejecución del script y que no se ejecute el resto del codigo.
    }
}

?>