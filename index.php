<?php
$age = 30;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice6</title>
</head>
<body>
  <p>
    <?php
    //echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    if ($age >= 18){
      echo 'Tu es majeur';

    }else{
      echo 'Tu n\'es pas majeur';
    }
    ?>
  </p>
</body>
</html>
