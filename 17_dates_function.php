<?php
echo "Welcom to the world of dates  <br> ";
// $d = date(' dS F Y ');
$d = date(' dS F Y , g:i A');
echo "Todays date is $d <br>";



// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A ');

// Prints: July 1, 2000 is on a Saturday
echo "<br> July 1, 2000 is on a  " . date("l", mktime(0, 0, 0, 7, 1, 2000));


$year = date("Y");
echo "<br>Copyright $year | All right reserved <br>";