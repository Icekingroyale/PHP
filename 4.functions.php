<?php

echo 'functions';

echo '<br/>' . '<br/>' . '<br/>';

echo 'functions';
echo '<br/>' . '<br/>';

function func($name = 'user')
{
    echo 'hello ' . $name;
    echo '<br/>' . '<br/>';
}


func("obie");
func();
?>

wagwan my guy!

<?php
echo 'functions', '<br/>';
func('manchi');


$a_bool = true;   // a bool
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an int

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str), "\n";
var_dump($a_bool);
echo var_dump($a_bool);
var_dump($an_int);

echo '<br/>';

func('mandy');
echo func('mandy');
// testFunc();