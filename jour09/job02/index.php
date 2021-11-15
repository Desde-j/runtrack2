<head>
<meta charset="utf-8">
<link rel="stylesheet" >
</head> 
<body>   

   <!-- CONNECTION ET SELECTION DE LA DB-->
   <?php
   $bdd = mysqli_connect("localhost:3307" , "root" , "root","jour08");
   $req = mysqli_query($bdd ,"SELECT nom , capacité FROM salles");
   $res = mysqli_fetch_all($req);
?>
    <!-- CREATION DU TABLEAU -->

    <table>
        <!-- entete du tableau -->
<thead>
    <tr>
    <th scope="col">Nom</th>
    <th scope="col">Capacité</th>

    
    </tr>
</thead>
        <!-- corps du tableau -->
<tbody>
    <?php
    foreach($res AS $key => $value){
        echo '<tr>';
        foreach($value AS $key2 => $value2){
        echo '<th>'.$value2.'</th>';
        }
        echo '</tr>';
    }
    ?>  
</tbody>    
</table>
 
</body>
</html>