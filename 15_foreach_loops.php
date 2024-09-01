<?php
echo "welcom to world of foreach loop <br>";
$arr = array("bananas",'apples','Harpic','Bread','Butter');
/*
for ($i=0; $i < count($arr); $i++) { 
    # code...
    echo $arr[$i];
    echo "<br>";
}
    */
//  Better way to do this
foreach ($arr as  $value) {
    # code...
    echo "$value <br>";
}
?>