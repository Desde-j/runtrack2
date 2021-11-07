<?php
    $_POST=['nom','prenom','sexe','pays'];
        $var =  0;
    for($i=0; isset($_POST[$i]);$i++) {
        $var++;
    }
    echo "Le nombre d'argument est: ".$var;
?>
<body>
                    <h1>Formulaire</h1>

    <form action="index.php" method="POST" name="formulaire">
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
<input type= submit value = "Envoyer"><br/>

</form>
</body>