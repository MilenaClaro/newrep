<?php
 
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // Null
 
$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;
 
//To verify the type of any object in PHP, use the var_dump() function:
 
echo "<br>";
echo "############################# Cast para String ################################";
echo "<br>";
 
 
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
 
//Cast para Inteiro
 
$a = 5;                 //Integer
$b = 5.34;              //Float
$c = "25 kilometers";   // String
$d = "kilometers 25";   // String
$e = "hello";           // String
$f = true;              // Boolean
$g = NULL;               // NULL
 
 
$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;
 
echo "<br>";
echo "############################# Cast para Inteiro ################################";
echo "<br>";
 
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
 
echo "<br>";
echo "############################# Cast para Float ################################";
echo "<br>";
 
$a = 5;                 //Integer
$b = 5.34;              //Float
$c = "25 kilometers";   // String
$d = "kilometers 25";   // String
$e = "hello";           // String
$f = true;              // Boolean
$g = NULL;               // NULL
 
 
$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;
 
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
 
?>