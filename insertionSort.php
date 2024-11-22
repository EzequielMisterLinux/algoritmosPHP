
<?php


function insertionSort(&$arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        
        while ($j >= 0 && strcasecmp($arr[$j], $key) > 0) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
}

echo "3. Prueba de Insertion Sort (nombres):\n";
echo "<br/>";
echo "<br/>";
$nombres = ["Carlos", "Ana", "Beatriz", "David", "Elena"];
echo "Lista original: " . implode(", ", $nombres) . "\n";
insertionSort($nombres);
echo "<br/>";
echo "<br/>";
echo "Lista ordenada: " . implode(", ", $nombres) . "\n";

?>