<?php
 
 $str="Certaines choses changent, et d'autres ne changeront jamais.";
 $str2="";

 for ($index= 0; isset($str[$index]) == true; $index++){
     if($index== 59){
        $str2 = $str2 . $str[0];
        
    }else{
         $str2 = $str2 . $str[$index + 1];
     }
 }

 echo $str2;

?>