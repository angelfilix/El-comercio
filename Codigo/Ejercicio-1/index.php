<?php 
include 'ChangeString.php';

$clase = new ChangeString();
echo 'Ejemplos:'.'<br />';
echo 'Entrada: "123 abcd*3" Salida: "'.$clase->build("123 abcd*3").'"'."<br />";
echo 'Entrada: "**Casa 52"  Salida: "'.$clase->build("**Casa 52").'"'."<br />";
echo 'Entrada: "**Casa 52Z" Salida: "'.$clase->build("**Casa 52Z").'"'."<br />";

?>

