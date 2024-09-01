<?php
echo "Welcome to scope and local/global var in php <br>";
$a = 98; // GLobal Variable
$b = 9;
function printValue(){
    // $a  =97; // Local  Variable
    global $a ,$b; // give access to the global variable
    $a = 100;
    $b = 1000;
    echo "<br>The value of variable is $a and $b <br>";
}

echo $a."<br>";
printValue();

echo "<br>The value of variable is $a and $b <br>";
// echo var_dump($GLOBALS); // Print all globals variables


echo var_dump($GLOBALS['a']);
echo var_dump($GLOBALS['b']);