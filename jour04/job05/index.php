


<form action="index.php" method="POST" name="formulaire">

        <!-- Nom/Prénom -->
Votre nom : <input type="text" name="username"><br/>
Votre mot de passe : <input type="text" name="password">


   <!-- Bouton Envoyer -->
   <input type= submit  value = "Envoyer">

</form>


<?php

if($_POST["username"]=="john" && $_POST["password"]=="rambo"){

    echo "C’est pas ma guerre <br>";

}
else {
    echo "Votre pire  cauchemar. <br>";
}
   

?>


