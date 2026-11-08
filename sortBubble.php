// BUBBLE SORT

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
        for($j=0; $j<$n-$i-1; $j++)
        {
            if($a[$j]>$a[$j+1])
            {
                $temp = $a[$j];
                $a[$j] = $a[$j+1];
                $a[$j+1] = $temp;
            }
        } 
    }

    echo "Sorted Array: ";
    for($i=0;$i<$n;$i++)
    {
        echo $a[$i]." ";
    }echo "\n";
?>
