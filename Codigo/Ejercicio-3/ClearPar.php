<?php
class clearPar {
	function build($string) {
		if(!is_string($string)){
			echo 'el valor no es un string';
			return FALSE;
		}
		$length = strlen($string); /*Longitud de la cadena ingresada*/
		$result = '';
		for ($i=0; $i<$length; $i++) {
			// substr — Devuelve parte de una cadena
			if(substr($string, $i, 2)=='()'){
				$result.='()';
			}
		}
		return $result;
	}
}
?> 