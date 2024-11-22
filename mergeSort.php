<?php


function mergeSort(&$arr) {
    if (count($arr) <= 1) {
        return;
    }
    
    $mid = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);
    
    mergeSort($left);
    mergeSort($right);
    
    merge($arr, $left, $right);
}

function merge(&$arr, $left, $right) {
    $i = 0; 
    $j = 0; 
    $k = 0; 
    
    while ($i < count($left) && $j < count($right)) {
        if (strcasecmp($left[$i], $right[$j]) <= 0) {
            $arr[$k] = $left[$i];
            $i++;
        } else {
            $arr[$k] = $right[$j];
            $j++;
        }
        $k++;
    }
    

    while ($i < count($left)) {
        $arr[$k] = $left[$i];
        $i++;
        $k++;
    }
    

    while ($j < count($right)) {
        $arr[$k] = $right[$j];
        $j++;
        $k++;
    }
}

echo "2. Prueba de Merge Sort (palabras):\n";
echo "<br/>";
echo "<br/>";
$palabras = ["banana", "manzana", "pera", "uva", "kiwi", "naranja"];
echo "Lista original: " . implode(", ", $palabras) . "\n";
mergeSort($palabras);
echo "<br/>";
echo "<br/>";
echo "Lista ordenada: " . implode(", ", $palabras) . "\n\n";



?>
