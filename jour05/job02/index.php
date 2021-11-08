<?php

function bonjour ($jour){


    if ($jour== true){
        echo 'Bonjour !';
    }   

    else {echo 'Bonsoir !';}
            
}

echo 'true :'.'<br/>';
bonjour (true);
echo '<br/>';

echo 'false :'.'<br/>';
bonjour (false);

?>