<?php
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    /*
    Con isset(); validamos que la variable esta definida y no es null
    Con !empty(); validamos que la variable no este vacía
    */
    if(isset($_POST['hobbies']) && !empty($_POST['hobbies'])){   
    
        /*
        Si nuestra variable hobbies[] esta definida y no esta vacia que se ejecute el bucle foreach 
        que recorra cada posicion del array y que imprima el valor de cada posicion.
        */
        foreach($_POST['hobbies'] as $valor){
            echo "Has elegido: " . htmlspecialchars($valor) . "<br>";  #es una función en PHP que se utiliza para convertir caracteres especiales en sus correspondientes entidades HTML
                                                                       #Ejemplo de salida:(&#039;Hola&#039;) 
                                                                       #Es decir  que 'hobbies' que esta en comillas simples(caracteres especiales) se imprime a su corrspondiente entidad HTML (&#039;hobbies&#039;)
        }
    }else{
        echo "Debes elegir una opción";
    }
}else{
    echo"Error al enviar formulario";
}
?>