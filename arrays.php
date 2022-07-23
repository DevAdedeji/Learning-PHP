<?php
//simple array
$numbers = [1, 2, 3, 4, 5, 6];
$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);
// var_dump($numbers);
// echo $fruits[1];

// Associative Array
$colors = [
    1 => 'red',
    4 => 'blue',
];

// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f',
];
// echo $hex['blue'];

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

// echo $person['first_name'];

$people = [[
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
], [
    'first_name' => 'Adedeji',
    'last_name' => 'Tewogbade',
    'email' => 'adedejitewogbade2@gmail.com'
]];


// echo $people[1]['email'];
// var_dump(json_encode($people));
