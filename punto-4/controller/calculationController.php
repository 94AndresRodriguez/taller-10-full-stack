<?php
$resultado = "";
$fechaNacimiento = 0;
$fechaActual = 0;

if ($_SERVER["REQUEST_METHOD"] ==="POST") {

    // obtener la fecha de nacimiento dado por el usuario
    $fechaNacimiento = $_POST["fecha_nacimiento"];
    
    // obtener la fecha actual
    $fechaActual = date("Y-m-d");

    // calcular la edad

    $diff = date_diff(date_create($fechaNacimiento), date_create($fechaActual));
    $edad = $diff->y;

    // realizar la comparacion y mostrar el resultado

    if ($edad <18) {
        $resultado = "su edad es " . $edad . " , por tanto: No es mayor de edad";
    } else {
        $resultado = "su edad es " . $edad . " , por tanto: Es mayor de edad";
        
    }
}

?>