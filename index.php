<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Texto sin programacion
        <br>
        <pre>
        <?php
        $saludo="Mundo Variable";
        echo "Hola Mundo 2 ";
        echo 'Hola '.$saludo;
        
        ?>

<?php
$meses["Enero"]="Verano";
$meses["Febrero"]="Verano";
$meses["Marzo"]="Verano/Otoño";
$meses["Abril"]="Otoño";
$meses["Mayo"]="Otoño/Invierno";
$meses["Junio"]="Invierno";
$meses["Julio"]="Invierno";
$meses["Agosto"]="Invierno/Primavera";
$meses["Septiembre"]="Primavera";
$meses["Octubre"]="Primavera/Verano";
$meses["Noviembre"]="Verano";
$meses["Diciembre"]="Verano";

foreach ($meses as $temp) {
    echo "La temporada de $temp.\n";
}

?>
        <br>
        <?php
         var_dump($_SERVER);
        ?>
        </pre>
    </body>
</html>
