<?php
/* Data Types */

#Scalar Types
#bool
$completed = true;

#int
$score = 75;

#float
$price = 0.99;

#string
$greeting = 'Hello J';

echo $completed.'<br/>';
echo $price;
echo $greeting.'<br/>';

echo gettype($price).'<br/>';
var_dump($completed);


#array
$companies = [1,2,3,0.5,true];
#echo $companies;
print_r($companies);


#declare(strict_types=1);

function sum(int $x, int $y){
    
    var_dump($x,$y);
    echo '<br />';
    return $x + $y;
}

$sum = sum(2.5, '3');
echo $sum . '<br />';

var_dump($sum);


$x = (int)'5';
echo $x;
