<?php
$a = 10;
$b = 20;
$sum = $a + $b;

echo "The sum is: ".$sum."\n";
echo "BEFORE SWAPPING: \n";
echo "A = ".$a."\n"."B = ".$b."\n";

// Swapping the numbers
$temp = $a;
$a = $b;
$b = $temp;
echo "AFTER SWAPPING: \n";
echo "A = ".$a."\n"."B = ".$b."\n";
?>