<?php
   $resultado = 0;
   $firstNumber = 0; 
   $secondNumber = 0;
   $operationType = 0;
   $mensaje = "";

if(isset($_POST["first_number"]) &&
   isset($_POST["second_number"]) &&
   isset($_POST["operacion_ejecutar"])) {

      $firstNumber = floatval($_POST["first_number"]);
      $secondNumber = floatval($_POST["second_number"]);
      $operationType = $_POST["operacion_ejecutar"];

      switch($operationType) {

         case "SUMA":
            $resultado = $firstNumber + $secondNumber;
            $mensaje = "El resultado de la suma es: " . $resultado;
            break;
           
         case "RESTA":
            $resultado = $firstNumber - $secondNumber;
            $mensaje = "El resultado de la resta es: " . $resultado;
            break;
            
         case "MULTIPLICACION":
            $resultado = $firstNumber * $secondNumber;
            $mensaje = "El resultado de la multiplicacion es: " . $resultado;
            break;
            
         case "DIVISION":
            $resultado = $firstNumber / $secondNumber;
            $mensaje = "El resultado de la division es: " . $resultado;
            break;
         default:
            $mensaje = "Opcion invalida.";
            break;      
      }
   }
?>