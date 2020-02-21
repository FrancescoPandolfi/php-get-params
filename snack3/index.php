<!-- // Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

  $db = [
    'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
    ]
  ];

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      .greens { background: rgb(89, 207, 139); padding: 10px;}
      .greys { background: #b6c7cd; padding: 10px; }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="greens">
      <ul>

        <?php
        $pms = $db['pm'];
        for ($i=0; $i < count($pms) ; $i++) {
          echo "<li>" . $pms[$i]['name'] . " - " . $pms[$i]['lastname'] . "</li>";
        } ?>

      </ul>
    </div>
    <div class="greys">
      <ul>

        <?php
        $teachers = $db['teachers'];
        for ($i=0; $i < count($teachers) ; $i++) {
          echo "<li>" . $teachers[$i]['name'] . " - " . $teachers[$i]['lastname'] . "</li>";
        } ?>

      </ul>
    </div>



  </body>
</html>
