<?php

$a = "hello";        // defining a variable $a
$hello = "Hello World!";  // defining a variable $hello with "Hello World!"

// displaying the content of $a
echo $a . "</br>";   // Output: hello

// displaying the content of $hello
echo $hello . "</br>";  // Output: Hello World!

// Using variable variables to access the value of $hello indirectly
echo $$a . "</br>";    // Since $a = "hello", $$a is equivalent to $hello

?>
