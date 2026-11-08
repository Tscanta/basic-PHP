<?php
    $a = array(54,24,87,22,0,9,23,1);
    $n = count($a); // The size of the array

    echo "Unsorted Array: ";
    for($i=0;$i<$n;$i++)
    {
        echo $a[$i]." ";
    }echo "\n";

    for($i = 0; $i < $n-1 ; $i++)
    {
        $minIndex = $i;
        for($j=$i+1; $j<$n; $j++)
        {
            if($a[$j]<$a[$minIndex])
            {
                $minIndex = $j;
            }
        }
        $temp = $a[$i];
        $a[$i] = $a[$minIndex];
        $a[$minIndex] = $temp;
    }

    echo "Sorted Array: ";
    for($i=0;$i<$n;$i++)
    {
        echo $a[$i]." ";
    }echo "\n";
?>