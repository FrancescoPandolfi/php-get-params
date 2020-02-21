<!-- Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa. -->

<?php
$password = $_GET['password'];
$colore = ($password == "boolean") ? 'verde' : 'rosso'
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      .verde {
        color: green;
      }
      .rosso {
        color: red;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p class="<?php echo $colore ?>">Accesso</p>
  </body>
</html>
