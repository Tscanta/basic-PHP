<?php
echo "\n\nIterative Statements AKA loops\n\n";

echo "This is a for loop: ";
  for($i=1;$i<10;$i++){
    echo $i;
  }echo "\n";

  $fruits = array("apple ","oranges ","banana ","mangoes ");
  echo "This is a foreach loop:";
  foreach($fruits as $f){
    echo " ".$f;
  }echo "\n";

  echo "This is a while loop:";
  $i=0;
  while($i<10){
    echo " ".$i;
    $i++;
  }echo "\n";

  echo "This is a do-while loop:";
  $i=0;
  do{
    echo " ".$i;
    $i++;
  }while($i<10);
  echo "\n";
  echo "\n";
?>