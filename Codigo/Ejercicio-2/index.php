<?php
include 'CompleteRange.php';
$clase = new CompleteRange();
echo 'Ejemplos:'.'<br />';

// Ejemplo 1
$range1 = [1,2,4,5];
$end = $clase->build($range1);
echo  'Entrada : "1, 2, 4, 5" Salida: "'.rtrim(implode(',', $end), ',').'"'."<br />";

// Ejemplo 2
$range2 = [2,4,9];
$end = $clase->build($range2);
echo 'Entrada: "2, 4, 9" Salida: "'.rtrim(implode(',', $end), ',').'"'."<br />";

// Ejemplo 3
$range3 = [55,58,60];
$end = $clase->build($range3);
echo  'Entrada : "55, 58, 60" Salida: "'.rtrim(implode(',', $end), ',').'"'."<br />";
?>
