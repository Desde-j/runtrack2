<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<?php
    $_GET=['nom','prenom','sexe','pays'];
        $var =  0;
    for($i=0; isset($_GET[$i]);$i++) {
        $var++;
    }
    echo "Le nombre d'argument est: ".$var;
?>
<body>
                    <h1>Formulaire</h1>

    <form action="index.php" method="GET" name="formulaire">
        <!-- Nom/Prénom -->
Votre nom : <input type="text" name="nom">
Votre prénom : <input type="text" name="prénom">
<p>
<br />
        <!-- Sexe -->
Sexe: <input type="radio" name="sexe" value="F">Feminin
      <input type="radio" name="sexe" value="M">Masculin
      <input type="radio" name="sexe" value="A">Autres
<p>
<br />
      <!-- Pays -->
Pays: <select name="pays">
        <option value="France">France</option>
        <option value="Russie">Russie</option>
        <option value="Etat-Unis">Etat-Unis</option>
        <option value="Suisse">Suisse</option>
<br />

    <!-- Bouton Envoyer -->
<input type= submit  value = "Envoyer">

</form>
</body>
</html>

