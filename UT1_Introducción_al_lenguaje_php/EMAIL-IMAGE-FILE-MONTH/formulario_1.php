<?php
error_reporting(E_ALL);

$directorio_almacenar = "archivo_subido/"; // Ruta del directorio donde vamos a almacenar el fichero que vamos a subir
$nombre_del_fichero = basename($_FILES["archivo"]["name"]); //Nombre del fichero que vamos a subir, (ponemos la variable 'archivo? que definimos en el formulario y decimos que queremos el ['name']
$valor_final_variables = $directorio_almacenar . $nombre_del_fichero; //Concatenamos la ruta del directorio con el nombre del fichero.

if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $valor_final_variables)) {
    echo "El archivo se ha subido correctamente.<br>";
} else {
    echo "Error al subir el archivo.<br>";
}



$imagen = basename($_FILES["image"]["name"]);
$resultado = $directorio_almacenar . $imagen;

if (move_uploaded_file($_FILES["image"]["tmp_name"], $resultado)) {
    echo "La imagen se ha subido correctamente.<br>";
} else {
    echo "Error al subir la imagen.<br>";
}
?>