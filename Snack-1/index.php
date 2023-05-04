<!-- 
## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

 -->

<?php

$teams = [
   [
      'home' => 'Olimpia Milano',
      'h_points' => '55',
      'guest' => 'Cantù',
      'g_points' => '60',
   ],
   [
      'home' => 'Segafredo Bologna',
      'h_points' => '89',
      'guest' => 'Sacfati Basket',
      'g_points' => '75',
   ],
   [
      'home' => 'Reyer Venezia',
      'h_points' => '58',
      'guest' => 'New Basket Brindisi',
      'g_points' => '48',
   ],
   [
      'home' => 'Dinamo assari',
      'h_points' => '91',
      'guest' => 'Treviso Basket',
      'g_points' => '90',
   ],
];

/* var_dump($teams); */

foreach ($teams as $match) {
   /*    var_dump($match); */

   echo $match['home'] . ' - ' . $match['guest'] . ' | ' . $match['h_points'] . '-' . $match['g_points'];

   echo '|###|';
}

?>