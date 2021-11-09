<?php

    session_start();

    if(isset($_POST["reset"])){
        session_destroy();

        header("Location: index.php");
    }

    elseif(isset($_POST["prenom"])){

        $_SESSION["prenoms"] = $_POST["prénom"];

    foreach((array)$_SESSION["prenoms"] as $_SESSION["prenom"]){

        if(isset($_POST["prenom"])){


            echo "$_SESSION[prenom]<br />";
        }
    }

}

?>
        <!-- Formulaire & Boutons -->

<form action="submit" method="POST">
    <input type="text" name='prenom' value="prenom">
    <button name="submit">Valider</button><br>
    <button name="reset" value="reset">Reset</button>
</form>



