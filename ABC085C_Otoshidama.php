<?php
fscanf(STDIN, "%d %d", $n, $y);

// $ans = array(-1, -1, -1);

// for ($i = $n; $i >= 0; $i--) {
//     for ($j = $n; $j >= 0; $j--) {
//         for ($k = $n; $k >= 0; $k--) {
//             if((10000*$i) + (5000*$j) + (1000*$k) == $y && $i + $j + $k == $n){
//                 unset($ans);
//                 $ans = array($i, $j, $k);
//                 break 3;
//             }
//         }
//     }
// }

// if ($ans[0] != -1) {
//     echo $ans[0]." ".$ans[1]." ".$ans[2];
// } else {
//     echo "-1 -1 -1";
// }

$ans = "-1 -1 -1";

$i10Max = floor($y / 10000);
for ($i10 = 0; $i10 <= $i10Max; $i10++) {
    $i1 = ($y - $i10 * 10000) /1000;
    if ((($i10 + $i1) -$n) % 4 == 0) {
        $i5 = (($i10 +$i1) - $n) / 4;
        $i1 -= $i5 * 5;
        if (! ($i5 < 0 || $i1 < 0) ){
            $ans = "{$i10} {$i5} {$i1}";
            break;
        }   
    }
}

echo $ans;

?>