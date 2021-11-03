<?php
$number = 0;

while($number <= 99):
    $number++;

if($number <= 20){
    echo "<br/>" ."<i>" .$number ."</i>";
}
elseif($number >= 25 and $number <=50 and $number != 42){
    echo "<br/>" ."<u>" .$number ."</u>";
}
elseif($number == 42){
    echo "<br/>"."La Plateforme_";
}
else{echo "<br/>".$number;}
endwhile;

?>

