<?php 
include 'ClearPar.php';
$clase = new clearPar();

echo 'Ejemplos:'.'<br />';

// Ejemplo 1
$range1 = '()())()';
$end = $clase->build($range1);
echo 'Entrada : "()())()" Salida: "'.$clase->build($range1).'"'."<br />";

// Ejemplo 2
$range1 = '()(()';
$end = $clase->build($range1);
echo 'Entrada : "()(()" Salida: "'.$clase->build($range1).'"'."<br />";

// Ejemplo 3
$range1 = ')(';
$end = $clase->build($range1);
echo 'Entrada : ")(" Salida: "'.$clase->build($range1).'"'."<br />";

// Ejemplo 4
$range1 = '((()';
$end = $clase->build($range1);
echo  'Entrada : "((()" Salida: "'.$clase->build($range1).'"'."<br />";

?>