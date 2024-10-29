<?php

/*
Desarrollar un script PHP que implemente la siguiente funcionalidad:

Crear una clase para recoger la información que te parezca adecuada sobre piezas musicales.
Crea una aplicación que instancie 10 objetos de la clase anterior y les asigne toda la información posible.
La aplicación presentará toda la información disponible de los 10 objetos. La presentación debe ser en formato lista o en formato tabla.
Incluye un fragmento de la pieza musical en archivo de audio o de vídeo.
*/


class piezasMusicales{
   
    private $tipoDePiezaMusical;
    private $nombrePiezaMusical;
    private $autorPiezaMusical;
    
 //Constructor 

 public function __construct ($tipoDePiezaMusical,$nombrePiezaMusical,$autorPiezaMusical){
   
    $this->tipoDePiezaMusical = $tipoDePiezaMusical;
    $this->nombrePiezaMusical = $nombrePiezaMusical;
    $this->autorPiezaMusical = $autorPiezaMusical;
    
 }


 //Metodos getter, como mis atributos los he declarado private necesito un metodo getter para poder acceder a los atributos desde cualquier parte.

 public function getTipoDePiezaMusical (){

    return $this->tipoDePiezaMusical;
 }


 public function getNombrePiezaMusical (){
    
    return $this->nombrePiezaMusical;
 }

 public function getAutorPiezaMusical (){

    return $this->autorPiezaMusical;
 }

}



?>