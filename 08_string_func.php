<?php
$name  = "Kaynat is a good boy.";
echo $name;
echo "<br>";

echo "the length of " . "my string is " . strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "good");
echo "<br>";
echo str_replace("Kaynat", "Mozammil",$name);
echo "<br>";
echo str_repeat($name,10);
echo "<br>";
echo "<pre>";
echo rtrim("        this is a good boy        ");
echo "<br>";
echo ltrim("        this is a good boy        ");
echo "</pre>";
echo "<br>";
?>