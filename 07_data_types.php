<?php 
// $name = "Kaynat";
// $income = 3000

/* php data types
!. Strings 
2. Integer
3. Float
4. Boolean


*/

// Stringn - sequence of char'
$name = "Kaynat";
$friend = "'John'";
echo "$name and his friend is $friend ";
//Interger - Non decimal number
$income = 585;
$debts = -677;

echo" <br>";
echo $income;
echo" <br>";
echo $debts;
echo" <br>";

// FLoat - decimal point num
$income = 82.77;
echo" <br>";
$debts = -45.5;
echo $income;
echo $debts;

// boolean
$x = true ;
$is_friend = false;
echo" <br>";
echo var_dump($x);
echo" <br>";
echo $x ;
echo" <br>";
echo var_dump($is_friend);
echo" <br>";

//Object - Instaces of classes
// Employee is a class --> kaynat can be  an object 
$friend = array("kaynar","mozammil","bhia",'nitish');
echo var_dump($friend);
echo "<br>";
echo $friend[0];
echo "<br>";
echo $friend[1];
echo "<br>";
echo $friend[2];
echo "<br>";
echo $friend[3];
// echo "<br>";
// echo $friend[4];

$name = NULL ;
echo "<br>";
echo var_dump($name);
?>