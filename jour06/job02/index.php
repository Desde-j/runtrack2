<?php
 $visites = 0;

 if (isset($_COOKIE['nbvisites'])) {
     $visites = $_COOKIE['nbvisites'];
     $visites++;
 }
setcookie('nbvisites',  $visites );
var_dump($_COOKIE);

if (isset($_COOKIE['nbvisites']))
{
    echo " l'élèment existe bien " . $_COOKIE['nbvisites'];

}
else {
    echo "L'élèment n'éxiste pas !";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">


<?php
   
echo 'Il y a eu avant reset : ' .htmlspecialchars ($visites) . ' visites';

if (isset($_POST['reset'])) 

{
    unset($_COOKIE['nbvisites']);
}
?>

<input type="submit" name="reset" value="reset">

    </form>
</body>
</html>
