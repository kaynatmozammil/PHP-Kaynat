<?php
/* Operators in PHP
1. Aritmatic 
2. Assignment
3. Comparison 
4. Logical 
*/
$a = 45;
$b = 9;

// 1. Aritmatic 
echo "For a + b , the result is ".($a + $b)."</br>";
echo "For a - b , the result is ".($a - $b)."</br>";
echo "For a / b , the result is ".($a / $b)."</br>";
echo "For a * b , the result is ".($a * $b)."</br>";
echo "For a % b , the result is ".($a % $b)."</br>";
echo "For a ** b , the result is ".($a ** $b)."</br>";

// 2. Assignment
$x = $a;
$a += 6;

// echo "For x , the value  is ".$x."</br>";
echo "For a , the value  is ".$a."</br>";



$a -= 6;
echo "For a , the value  is ".$a."</br>";
$a /= 6;
echo "For a , the value  is ".$a."</br>";

$a *= 6;
echo "For a , the value  is ".$a."</br>";


$a %= 6;
echo "For a , the value  is ".$a."</br>";


# 3. Compariso Operators
$x = 9;    
$y = 9;
echo "For x == y , the result is ";
echo var_dump($x <= $y) . "</br>";

// not equal to
echo "For x <> y , the result is ";
echo var_dump($x <> $y) . "</br>";

# 4 . Logical operator
$m = true;
$n = false;

echo "For m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is ";
echo var_dump($m or $n);
echo "<br>";


echo "For m || n, the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "For !m, the result is ";
echo var_dump(!$m);
echo "<br>";

?>

