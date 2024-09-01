<?php
echo "Welcome to Multi _dimentional arrays in php <br>";


// Creating 2-D array
$multiDim = array(
    array(2,35,6,74,4),
    array(2,35,6,74,4),
    array(2,35,6,74,4),
    array(2,35,8,74,4)
);

// echo var_dump($multiDim);
// echo $multiDim[3][2];


// Printing the content of 2 - D array 
// for ($i=0; $i < count($multiDim); $i++) { 
//     # code...
//     echo var_dump(($multiDim[$i]));
//     echo "<br>";
// }

for ($i=0; $i < count($multiDim); $i++) { 
    # code...
    for ($j=0; $j <count(($multiDim[$i])) ; $j++) { 
        # code...
        echo $multiDim[$i][$j]." ";
    }
    echo "<br>";
}
  
