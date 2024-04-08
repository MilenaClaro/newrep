<?php

echo "<br>";
echo "####################";
echo "<br>";

$colors = array("violet", "blue", "green", "red", "1", "2", "3");

foreach ($colors as $x) {
    echo "$x <br>";
}

echo "<br>";
echo "####################";
echo "<br>";

$membros = array("MILENAAAA" => "16", "ALLANYSSSS" => "15", "PEDROOOOO" => "17");
foreach ($membros as $x => $y) {
    echo "$x : $y <br>";
}

echo "<br>";
echo "####################";
echo "<br>";

$colors = array("violet", "blue", "green", "red");

foreach ($colors as $x) {
    if ($x == "blue") break;
    echo "$x <br>";
}

echo "<br>";
echo "####################";
echo "<br>";

$colors = array("violet", "blue", "green", "red");

foreach ($colors as $x) {
    if ($x == "green") continue;
    echo "$x <br>";
}


?>