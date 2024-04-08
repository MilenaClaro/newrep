<?php

$i = 1;
while ($i < 5) {
    echo ("$i <br>");
    $i++;
}

$i = 1;
while ($i < 6) {
if ($i == 3) break;
    echo $i;
    $i++;
}

$i = 0;
while ($i < 6) {
if ($i == 3) continue;
    $i++;
    echo $i;
    
}

$i = 1;

do {
    echo $i;
    $i ++;
} while ($i < 6);

$i = 8;

do {
    echo $i;
    $i ++;
} while ($i < 6);


?>