<?php
  function factorial($x)
  {
    if($x==0 or $x==1)
      return 1;
    else
      return $x*factorial($x-1);
  }
  
  function main()
  {
    echo "Enter a number to check: ";
    $n = readline();
    $f = factorial($n);
    echo $f;
  }
main();
?>