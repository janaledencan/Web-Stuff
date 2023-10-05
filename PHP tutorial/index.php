<?php

// ARRAYS
$programmingLanguages = ['PHP', 'Java', 'Python'];

$name = 'Ja';
echo $programmingLanguages[0];

var_dump($programmingLanguages);

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo count($programmingLanguages);

$programmingLanguages[]='C++';  //adding, push to an array
array_push($programmingLanguages, 'C', 'GO');

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

$programmingLanguages = [  //like dictionary
    'php'=> '8.3',
    'python' => '3.9'
];

$programmingLanguages['go'] = '1.15';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';


$array = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd'];
print_r($array);
//override se dogodio jer je true = 1 i 1.8 se casta u int 1 i zato ispise samo 'd'


//indexes: 0, 1, 50, 51, 52 
$grades = ['A', 'B', 50 => 'C', 'D', 'F'];
echo '<pre>';
print_r($grades);
echo '<pre>';

#array_shift, array_pop

unset($grades[1]);
print_r($grades);