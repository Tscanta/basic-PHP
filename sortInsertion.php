<?php
    $a = [57,2,59,0,1,3,4];
    $n = count($a);

    echo "Unsorted Array: ";
    for($i=0;$i<$n;$i++)
    {
        echo $a[$i]." ";
    }echo "\n";


    for($i=1; $i<$n; $i++)
    {
        $key = $a[$i];
        $j = $i-1;
        while($j >= 0 && $a[$j] > $key)
        {
            $a[$j+1] = $a[$j];
            $j--;
        }
        $a[$j+1] = $key;
    }

    echo "Sorted Array: ";
    for($i=0;$i<$n;$i++)
    {
        echo $a[$i]." ";
    }echo "\n";
?>