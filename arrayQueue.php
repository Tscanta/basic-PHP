<?php 

$front = 0;
$rear = 0;
$queue = array(10);

function enqueue($x){
    global $front, $rear, $queue;
    if($rear == 10){
        echo "The queue is full\n";
    }
    else{
        $queue[$rear] = $x;
        $rear++;
    }
}

function dequeue(){
    global $front, $rear, $queue;
    if($front==$rear){
        echo "The queue is empty";
    }
    else{
        echo "The element ".$queue[$front]." has been deleted.\n";
        $front++;
    }
}

function display(){
    global $front, $rear, $queue;
    if($front==$rear){
        echo "The queue is empty";
    }
    else{
        for($i=$front; $i<$rear; $i++){
            echo $queue[$i]." ";
        }
        echo "\n";
    }
}


function main(){
    $choice = 0;
    while($choice!=2){
         echo "Press 1. Enqueue\nPress 2. Dequeue\n";
         $choice = readline();
         switch($choice){
            case 1:
                echo "Enter a number to enqueue: ";
                $n = readline();
                enqueue($n);
                display();
                break;
            case 2:
                dequeue();
                display();
                break;
            default:
                echo "Please enter a valid choice.";
         }
    }
}main();
?>