<?php

$fruits = ["Cashew","Apple", "Banana", "Cherry","Mango","Paw-paw"];
$veges = ["Carrot","Bitter leaf", "Curry", "Water leaf","Onugbu"];
echo sort($fruits), str_repeat('<br/>',2); // returns 1(true) to show success
sort($veges); 

foreach ($fruits as $i) {
    # code.. to loop and output the contents of the sorted fruits
    echo $i.' ';
}
echo '<br/>';

foreach ($veges as $key) {
    # code.. to loop and output the contents of the sorted vegetables
    echo $key.' ';
}

rsort($veges); // sorts the array in reverse or descending order for int

$fave_num = array(8,6,11,69,19);
rsort($fave_num); 

echo str_repeat('<br/>',2);

foreach ($fave_num as $key) {
    # code...
    echo 'my favourite number in descending order is '.$key.'<br/>';
}

echo '<br/>';

foreach ($veges as $key) {
    # code..
    echo $key.' ';
}

echo '<br />';
echo '<br />';
echo $fruits[2];

$my_car = ['brand'=>'lexus','model'=>'es350','year'=>'2017','colour'=>'wine red'];
echo '<br />';
echo '<br />';


//Sorting Associative Arrays
$dream_car = ['brand: '=>'Lexus','model: '=>'Rx 350','year: '=>'2017','color: '=>'Red'];


asort($dream_car); //asort() sorts the array in ascending order, maintaining key association
echo '<h4 style=color:purple;margin:0px;> Values of my dream car sorted in ASCENDING order</h4>';
foreach ($dream_car as $key => $value) {
    # code...
    echo $key.' '.$value.'<br/>';
}
echo '<br/>';

echo '<h4 style=color:purple;margin:0px;> Values of my dream car sorted in DESCENDING order</h4>';
ksort($dream_car); //ksort() sorts the array in ascending order, maintaining key association
foreach ($dream_car as $key => $value) {
    # code...
    echo $key.' '.$value.'<br/>';
}

krsort($dream_car); //reverses the sort on the keys
arsort($dream_car); //reverses the sort on the values