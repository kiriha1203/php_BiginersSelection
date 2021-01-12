<?php
fscanf(STDIN, "%d %d", $a, $b);

 if ($a % 2 == 0 || $b % 2 == 0) {
     echo "Even";
 } else {
     echo "Odd";
 }
?>