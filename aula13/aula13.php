<?php
echo "<br>";
echo "####################";
echo "<br>";

$cars = [
    0 => "BMW",
    1 => "Volvo",
    2 => "Toyota",
    10 => "Patins",
];

echo "<br>";
echo $cars ["0"];
echo "<br>";
echo $cars ["1"];
echo "<br>";
echo $cars ["2"];
echo "<br>";
echo $cars ["10"];

echo "<br>";
echo "####################";
echo "<br>";

$cars = [];
$cars[0] = "Volvo";
$cars[1] = "Chevrolet";
$cars[2] = "Toyota";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => "1964");

$cars['years'] = 2024;

foreach($cars as $x => $y) {
    echo "$x : $y <br>";
}
?>