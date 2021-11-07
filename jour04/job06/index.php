<form action="index.php" method="GET" name="formulaire">

        <!-- Nombres -->
Votre nombre : <input type="text" name="nombre"><br/>

   <!-- Bouton Envoyer -->
   <input type= submit  value = "Envoyer">

</form>

<?php

if($_GET["nombre"] % 2 == 0) {
    echo "Le nombre ".$_GET["nombre"]." est paire <br/>";

 }
 else{
   echo "Le nombre ".$_GET["nombre"]." est impaire <br/>";
 }

 ?>