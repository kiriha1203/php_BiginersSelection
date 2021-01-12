<?php
fscanf(STDIN, "%d", $n);
$numbers = explode(' ', fgets(STDIN));
$counts = array();
for ($i = 0; $i < $n; $i++) {
    $count = 0;
    while ($numbers[$i] % 2 == 0) {
        $count += 1;
        $numbers[$i] = $numbers[$i] / 2;
    }
    array_push($counts, $count);
}
echo min($counts);
?>