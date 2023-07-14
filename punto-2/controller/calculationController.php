<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //obtener el nombre y la edad ingresados por el usuario

    $nombre = $_POST["nombre_usuario"];
    $edad = $_POST["edad_usuario"];

    // verificar si la edad es menor de 18 

    if ($edad < 18) {
        $mensaje = "Hola, " . $nombre . " No eres mayor de edad, tu edad es: " . $edad;

    } else {
        $mensaje = "Hola, " . $nombre . " Eres mayor de edad, tu edad es: " . $edad;
    }    
    
}
?>