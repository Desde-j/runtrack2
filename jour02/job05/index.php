<?php
    $nb = 2;
    while($nb <= 1000)
    {
        $number = $nb - 1;
        while($number >= 0)
        {
            if($nb % $number == 0)
            {
                break;
            }
            $number--;
        }
        if($number == 1) echo "$nb <br/>";
        $nb++;
    }
?>
