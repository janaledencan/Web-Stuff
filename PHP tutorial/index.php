<?php

//Expressions

$x = 5;
$y = $x;
echo $y;


//Operators
$x = 10.5;
$y = 2.9;

var_dump(fmod($x,$y));

//strict comparison

if($x === $y){
    echo("They are strictly same");
}else{
    echo("Not equal");
}

$a = 'Hello';
$b = strpos($a, 'H');

if($y == false){
    echo 'H not found';
}else{
    'H found at index' . $y;
}


$x = true;
$y = false;

$z1 = $x and $y; //veca prednost je = pa se zatim taj rezultat usporedi s y
$z2 = $x && $y;  //logicki and
var_dump($z1);
var_dump($z2);


$x=6;
$y=1;
echo($x>>$y); //right shift (kao dijeljenje s 2) 

#operator precedence & associativity