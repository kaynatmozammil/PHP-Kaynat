<?php



echo "Welcome to PHP tutorial on functions <br>";

function processMarks($marksArr)
{
    $sum = 0;
    foreach ($marksArr as  $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr)
{
    $sum = 0;
    $i = 1;
    foreach ($marksArr as  $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}


$rohan = [34, 98, 45, 23, 98, 93];
$sumMarks = processMarks($rohan);

$kaynat = [99,55,43,99,23,22];
$sumMarksKaynat  = processMarks($kaynat);

echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
echo "Total marks scored by kaynat out of 600 is $sumMarksKaynat <br>";



$avgMarks = avgMarks($rohan);


$avgMarksKaynat  = avgMarks($kaynat);

echo "Total marks avg scored by Rohan is  $avgMarks <br>";
echo "Total marks avg scored by kaynat  is $avgMarksKaynat <br>";
?>
