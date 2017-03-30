<?php
/**
 * Created by PhpStorm.
 * User: hakon
 * Date: 27.03.2017
 * Time: 19.03
 */
$array = [1, 4, 8, 1, 4, 10, 5, 6, 2, 4, 6];
$j = 0;
echo 'Tall i tallrekken  [1, 4, 8, 1, 4, 10, 5, 6, 2, 4, 6] som er over 5: ';
for ($i = 0; $i < sizeof($array); $i++) {
    $let = $array[$i];
    if ($let > 5) {
        $j++;
        echo $let . ' ';
    }
}
echo '<br>Totalt er det ' . $j . ' tall over 5.<br>Nå kommer tallrekken baklengs: [';
for ($i = sizeof($array) - 1; $i >= 0; $i--) {

    echo $array[$i];
    if ($i != 0) {
        echo ', ';
    }
}
echo ']<br>Nå kommer det minste tallet: ';
$min = PHP_INT_MAX;
for ($i = 0; $i < sizeof($array); $i++) {
    $let = $array[$i];
    if ($let < $min) {
        $min = $let;
    }
}
echo $min . '<br>Nå printes det minste tallet ut ved hjelp av en funksjon: ' . min($array);

function findNumbersAbove($value, $array)
{
    $temp = [];
    for ($i = 0; $i < sizeof($array); $i++) {
        $let = $array[$i];
        if ($let > $value) {
            array_push($temp, $let);
        }
    }
    return $temp;
}

echo '<br>Nå printes alle tall over en 2 ut: [' . join(', ', findNumbersAbove(2, $array)) . ']';
echo '<br>Nå printes alle tall over en 4 ut: [' . join(', ', findNumbersAbove(4, $array)) . ']';
echo '<br>Nå printes alle tall over en 6 ut: [' . join(', ', findNumbersAbove(6, $array)) . ']';
echo '<br>Nå printes alle tall over en 8 ut: [' . join(', ', findNumbersAbove(8, $array)) . ']';
function findAmountOfNumbersAbove($value, $array)
{
    $j = 0;
    for ($i = 0; $i < sizeof($array); $i++) {
        $let = $array[$i];
        if ($let > $value) {
            $j++;
        }
    }
    return $j;
}

echo '<br>Nå printes antall tall over 2 ut: ' . findAmountOfNumbersAbove(2, $array);
echo '<br>Nå printes antall tall over 4 ut: ' . findAmountOfNumbersAbove(4, $array);
echo '<br>Nå printes antall tall over 6 ut: ' . findAmountOfNumbersAbove(6, $array);
echo '<br>Nå printes antall tall over 8 ut: ' . findAmountOfNumbersAbove(8, $array);