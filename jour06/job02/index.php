<?php
    setcookie('user_id', '1234');
    setcookie('user_pref', time()+3600*24, '/', '', true, true);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<form action ="index.php" method="POST">

<?php

 if (isset($cookie_name['nbvisites'])) 
 {
     $cookie_name['nbvisites']++;
 } 
 else
  {
     $cookie_name['nbvisites'] = 0;
 }
 
 echo 'Il y a eu avant reset : ' . $cookie_name['nbvisites'] . ' visites';
 
 if (isset($_POST['reset'])) 
 
 {
     unset($cookie_name['nbvisites']);
 }

 ?>

 <input type= submit  name="reset" value = "Reset">

</form>
</body>
</html>