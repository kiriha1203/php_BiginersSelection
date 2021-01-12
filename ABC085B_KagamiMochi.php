<?php
fscanf(STDIN, "%d", $n);
$array = [];

for ($i = 0; $i <= $n - 1; $i++) {
    $array[] = (int)fgets(STDIN);
}

echo count(array_unique($array));
?>