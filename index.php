<?php
echo 'this is a simple string';
echo '<br>';
$url = "IS@DPU";
echo "I'm learning PHP at $url<br>"; 

// Concatenate strings
echo "I'm learning PHP at " . $url . '<br>';

$hello = "Hello, ";
$hello .= "World!"; # $hello = $hello . "World!";
echo $hello;   # => Hello, World!

echo '<br>';

$int1 = 28;    # => 28
$int2 = -32;   # => -32
$int3 = 012;   # => 10 (octal)
$int4 = 0x0F;  # => 15 (hex)
$int5 = 0b101; # => 5  (binary)
$int6 = 2_000_100_000;

echo "$int1<br>";
echo "$int2<br>";
echo "$int3<br>";
echo "$int4<br>";
echo "$int5<br>";
echo "$int6<br>";



?>