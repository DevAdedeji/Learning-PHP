<?php
$fruits = ['apple', 'orange', 'pear'];

//  Get length
// echo count($fruits);

// Search array
// var_dump(in_array('apple', $fruits));

// Add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');

// remove from array
// array_pop($fruits);
// array_shift($fruits);
// unset($fruits[2]);

// Split into 2 chunks
// $chunked_array = array_chunk($fruits, 3);


$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
// print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);
// print_r($c);
// Print keys of combined array
$keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1, 20);
// print_r($numbers);

// $newNumbers = array_map(function ($number) {
//     return "Number $number";
// }, $numbers);

// $lessThan10 = array_filter($numbers, function ($num) {
//     return $num < 10;
// });

$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);

var_dump($sum);
