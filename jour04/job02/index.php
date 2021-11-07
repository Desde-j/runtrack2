<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
<form action="index.php" method="GET" name="formulaire">

        <!-- Nom/Prénom -->
Votre nom : <input type="text" name="nom">
Votre prénom : <input type="text" name="prenom">
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

<table>
    <thead>
  <colgroup>
    <col span="3"style="background-color:lightgrey">
  </colgroup>

  <tr>
    <th>Arguments</th>
    <th>Valeurs</th>
  </tr>
</thead>

<tbody>

  <tr>
    <th><?php echo 'Nom';?></th>
    <th><?php echo $_GET['nom'];?></th>
  </tr>
  <tr>
    <th><?php echo 'Prenom';?></th>
    <th><?php echo $_GET['prenom'];?></th>
  </tr>
  <tr>
    <th><?php echo 'Sexe';?></th>
    <th><?php echo $_GET['sexe'];?></th>
  </tr>
  <tr>
    <th><?php echo 'Pays';?></th>
    <th><?php echo $_GET['pays'];?></th>
  </tr>
</table>



