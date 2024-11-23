<?php

// Machine information 
// phpinfo();

// Machine browsers information;
echo $_SERVER['HTTP_USER_AGENT'];

echo '<br/>';
echo '<br/>';


// Conditional Statements
if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
    echo 'This is a Chrome browser';
}

echo '<br/>';
echo '<br/>';


$name = 'isabella';
echo strlen($name);
echo '<br/>';
echo strtoupper($name);


// pay attention to the opening and closing php tags within this block of code
// this is how you jump in and out of php mode, the flow of execution remains the same
// instead of echoing an output, you just sent a basic html code to the browser
if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefoxxx')) {
?>
    <h3>str_contains() returned true</h3>
    <p>You are using Firefox</p>
<?php
} else {
?>
    <h3>str_contains() returned false</h3>
    <p>You are not using Firefox</p>
<?php
}

