<?php
class ChangeString {
    
    function build($string){
        
        /*Array de ABC*/
        $abc=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z",
                          "A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
        /*Array de reemplazo*/
        $reemplazo=array("b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z","a",
                         "B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z","A");
        
        $resultado='';
        
        for($i=0;$i<strlen($string);$i++) {
               /*array_search — Busca un valor determinado en un array y devuelve la primera clave correspondiente en caso de éxito*/
               $lugar=array_search($string[$i], $abc);
   
                if(is_numeric($lugar)){
                    /*Si se encuentra en el array ABC será reemplazado por el elemento de la misma lugarición del array reemplazo*/
                   $resultado=$resultado.$reemplazo[$lugar];
                  
               }elseif(!$lugar){
                  /*Si no se encuentra en el array ABC no será reemplazado*/
                   $resultado=$resultado.$string[$i];
               }
        }
        return $resultado;
    }
}
?> 

