<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php doc</title>
</head>

<body>
    <?php
    echo 'my niggalo';
    print "<hr>";
    echo 'okeke';


    echo "<hr>";
    $a = 20;
    $b = 30;
    $c = $a + $b;

    echo $c, '<br />';

    var_dump($c);

    echo '<br>', '<hr>' . $c + $a . '<br>', '<hr>';



    echo '<p style="color: blue; font-size: 20px;">This is styled text in PHP.</p>';


    echo '<h1 style= "color: green;">' . $c . '</h1>';

    echo '<h1 style="color: red;">' . $c . '</h1>';

    echo '<p style="color: purple;"> wagan </p> ';

    if ($c < 12 and $a < 4) {
        # code...
        echo 'this is an if statement';
    } else {
        # code...
        echo 'this is an else statement';
    }

    echo '<br />';
    echo '<br />';


    for ($i = 35; $i < 40; $i++) {
        # code...
        echo 'this loop is foring';
        echo '<br />';
        echo '<br />';
    }

    while ($a >= 10) {
        # code...
        echo 'this loop is for whiling';
        echo '<br />';
        $a--;
    }

    // inspect the intresting exercise below;
    $loop_data = ['this', 'loop', 'is', 'for', 'whiling'];

    echo '<br>';
    echo '<br>';


    foreach ($loop_data as $i) {
        # code...
        echo $i;
        echo '<br/>';
    }


    function func($name = 'user')
    {
        echo 'hello' . $name;
    }

    // operators in php 


    ?>
</body>

</html>