<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>
<body>

<?php

$str="On n est pas le meilleur quand on le croit mais quand on le sait.";

$dic = [
    "consonne"=> ["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z"],
    "voyelle"=> ["a","e","o","i","y","u","O"],
];
$voy=0;
$con=0;

for( $i=0; isset($str[$i])==true;$i++) {

    for($a =0; isset($dic["consonne"][$a]); $a++) {
    if($str[$i] == $dic["consonne"][$a]) {
        $con++;
    }
}

    for($b =0; isset($dic["voyelle"][$b]); $b++) {
    if($str[$i] == $dic["voyelle"][$b]) {
    $voy++;
    }
}

}

?> 
<table>
<thead>
<th>voyelle</th>  
<th>consonne</th>   
</thead>    
<tbody>

<td><?php echo " $voy voyelle <br>";?></td>    
<td><?php echo " $con consonne <br>";?></td>  

</tbody>
</table>

</body>
</html>