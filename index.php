<?php

$errores = '';
$enviado = '';
$Alfa = 67.5;
$TanAlfa = tan(deg2rad($Alfa));
    if (isset($_POST['submit'])){ 
        $Lado = $_POST["Lado"];
        
        if (!empty($Lado)) {
        $Perimetro = 8 * $Lado;
        $Mitad = $Lado/2;
        $Apotema = $TanAlfa * $Mitad;
        $Area = ($Perimetro * $Apotema)/2;
        $enviado .= $Area;

        }
        else{
           $errores .= 'Por favor ingresa un los valores <br />';
        }
    }

    
    
    
require 'index.view.php';

?>