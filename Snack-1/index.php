<!-- 
## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60
 -->

<?php

$teams = [
   'home' => [
      'Olimpia Milano' => ['points' => '55'],
      'Segafredo Bologna' => ['points' => '87'],
   ],
   'guests' => [
      'Cantù' => ['points' => '60'],
      'Napoli' => ['points' => '78'],
   ],
];

var_dump($teams);



?>