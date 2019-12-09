<?php

//example: print hello 5 times,

loop(5, function ($i) {
         echo sprintf("heloo %s <br>", $i) ;
    });
// simulate loop;
function loop($i, $fct){
    static $s ;
    
    if(empty($s)){ 
        $s = $i ;
    }

    if($i == 0 ) {
        return ; 
    }
  
   $fct($s - $i) ;
  
   loop($i -1, $fct) ;

}
?>
