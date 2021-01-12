<?php
fscanf(STDIN, "%d %d %d", $n, $a, $b);

$target = [];

for($i = 0; $i <= $n; $i++ ) {
    $iToS = (string)$i;
    $arrayI = str_split($iToS);
    if ($a <= array_sum($arrayI) && array_sum($arrayI) <= $b) {
        array_push($target, $i);
    }
}
echo array_sum($target);
?>