<?php

$str = "I'm sorry Dave I'm afraid I can't do that.";
$Tableauvoyelle = ['a','e','i','o','u','y','A','E','I','O','U','Y']; 

for ($index = 0; isset( $str[ $index ]) == true; $index++)  
{ 
$CaraStr = $str[ $index ]; 

for ( $iVoy = 0; isset( $Tableauvoyelle[ $iVoy ]) == true; $iVoy++) 
{ 
$Voyelle = $Tableauvoyelle[ $iVoy ];
              
    if ( $CaraStr == $Voyelle ) {
        echo $CaraStr. ' ' ;
                break ;
            
            } 
        } 
        
    } 
?>


