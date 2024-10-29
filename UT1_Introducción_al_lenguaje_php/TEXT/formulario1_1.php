<?php
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['nombre'])  && $_POST['nombre'] == "Mercedes Urios"){ //Valida que el campo no este vacio y que el nombre sea igual a Merceder Urios
        echo "Nombre: " . htmlspecialchars($_POST['nombre']) . "<br>";   //Si es asi muestra el nombre y sino un mensaje de error
    }else{
        echo"Error, usuario inválido ;(";
    }
}else{
    echo"Error al anvíar el formulario";
}

?>