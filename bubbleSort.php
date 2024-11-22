<?php

function bubbleSort(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {

                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}




echo "1. Prueba de Bubble Sort (números descendentes):\n";
echo "<br/>";
$numeros = [64, -34, 25, 12, 22, 11, 90, -5];
echo "<br/>";
echo "Lista original: " . implode(", ", $numeros) . "\n";
bubbleSort($numeros);
echo "<br/>";
echo "<br/>";
echo "Lista ordenada: " . implode(", ", $numeros) . "\n\n";


?>