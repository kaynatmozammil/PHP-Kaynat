<?php

echo "Welcome come to associative array in php <br>";

// These are called index arrays-->
// $arr = array('this', 'that', 'what');

// echo $arr[0] ."<br>";
// echo $arr[1] ."<br>";
// echo $arr[2] ."<br>";


// Associative arrays
$favcol = array(
    'Kaynat' => 'red',
    'Ali' => ' green',
    'Faiz' => 'Yellow',
    8 => 'this'
);

// echo $favcol['Faiz'] . "<br>";
// echo $favcol['Ali']. "<br>";
// echo $favcol['Kaynat']. "<br>";
// echo $favcol[8]. "<br>";

foreach ($favcol as $key => $value) {
    # code...
    echo "Favorite color of $key is $value <br>";
}
