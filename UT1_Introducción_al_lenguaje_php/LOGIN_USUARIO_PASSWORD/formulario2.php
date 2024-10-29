<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "author" content="Cristina Yoselin Sarmiento Mociños">
    <title>Tipo de formulario: Login usuario y contraseña</title>
    
    <!--Añadimos un poco de estilo para el formulario--> 

    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #eca6e3, #feb47b);
        }
        form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="password"],
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        


        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

    
</head>



<body> 
    
<?php
// Verifica si hay un error en la URL y si es asi, muestra un mensaje de error 
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo '<script>alert("Revise su usuario y contraseña");</script>';  
    
}

?>


    <form action="formulario2_1.php"  method="POST"> 
        <label for="name">Nombre y Apellido: </label>
        <input type="text" id="name" name="name">
        <label for="password">Clave:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="submit">
    </form>


</body>
</html>