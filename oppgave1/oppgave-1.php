<?php
/**
 * Created by PhpStorm.
 * User: hakon
 * Date: 25.03.2017
 * Time: 15.15
 */
echo 'Tallrekke med en for-loop: ';
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . ' ';
    }
}
echo'<br>Tallrekke med en while-loop: ';
$j = 1;
$k = 0;
while ($j <= 100) {
    if ($j % 3 == 0) {
        $k += $j;
        echo($j . ' ');
    }
    $j++;
}
echo '<br>Gjennomsnitt av tallrekken: ';
echo $k / floor(100 / 3);

