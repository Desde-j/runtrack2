<?php

function calcul($a,$operation,$b){
        
        switch ($operation) {
        case '+':
        return $a + $b;
                
        case '-':
        return $a - $b;
                
        case '*':
        return $a * $b;
                
        case '/':
        return $a / $b;
    }
}

$resultat = calcul($_GET['n°1'],$_GET['ope'],$_GET['n°2']);
     
?>
        <!-- Formulaire -->
        
<form action="index.php" method="GET">

    <label for="n°1">Entrer le premier nombre: </label>
    <input type="text" name="n°1"  >

  <br/>  
    
    <label for="ope">Choisir un opérateur:</label>

    <select name="ope" id="select">    
        <option value="">Choisissez un opérateur</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="+">+</option>
    </select>

<br/>


    <label for="n°2">Entrer un second nombre: </label>
    <input type="text" name="n°2" >

    <input type="submit" value="Envoyer">
</form>

<?php
    if (isset($_GET['n°1']) and isset($_GET['ope']) and isset($_GET['n°2'])) {
    echo 'Le résultat est: '.$resultat;
    }
?>