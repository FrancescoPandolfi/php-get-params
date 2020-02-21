<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!-- ?name=francesco&mail=info@email.it&age=35 -->

<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

print
(strlen($name) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric ($age)) ?
'Accesso riuscito' : 'Accesso negato'


?>
