<?php 

$top = 0;
$stack = [];

function push ($x)
{
    global $top, $stack;

    if($top==10)
    {
        echo "Stack Overflow";
    }
    else
    {
        $stack[$top] = $x;
        $top++;
    }
}

function pop()
{
    global $top, $stack;

    if($top==0)
    {
        echo "Stack Underflow";
    }
    else
    {
        $top--;
    }
}

function display()
{
    global $top, $stack;
    
    if($top==0)
    {
        echo "Stack is Empty";
    }
    else
    {
        for($i=$top-1; $i>=0; $i--)
        {
            echo $stack[$i]." ";
        }
        echo "\n";
    }
}

function main()
{
    $choice = 0;
    while($choice!=2)
    {
        echo "Press 1. Push\nPress 2. Pop\n";
        $choice = readline();
        switch($choice)
        {
            case 1:
                echo "Enter a number to push: ";
                $n = readline();
                push($n);
                display();
                break;
            case 2:
                pop();
                display();
                break;
            default:
                echo "INVALID";
        }
    }
}
main();
?>