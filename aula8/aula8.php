<?php
if (5 < 3) {
    echo "have a good day and good ideas ;)";
}
echo "<br>";
if (5 > 3) {
    echo "have a good day and good ideas ><";
}
echo "<br>";
$t = 14;
if ($t == 20) {
    echo "have a good day and good ideas :o";
} else {
    echo "Don't have a good day and good ideas :/";
}

echo "<br>";

$z = date("H") - 3;
echo ("$z");
if ($z < "19") {
    echo "Have a good day!";
} else {
    echo "Have a good night";
}

$n = date("H") - 3;

echo ("$n");
if ($n)
?>