<?php
fscanf(STDIN, "%d", $n);
$numbers = array_map('intval', explode(" ", fgets(STDIN)));
rsort($numbers);
$alice = 0;
$bob = 0;

// for ($i = 0; $i <= $n - 1; $i++) {
//     if ($i % 2 == 0) {
//         $alice += $numbers[$i];
//     } else {
//         $bob += $numbers[$i];
//     }
// }

foreach ($numbers as $i => $j) {
    if ($i % 2 == 0) {
        $alice += $j;
    } else {
        $bob += $j;
    }
}
echo $alice - $bob;
?>