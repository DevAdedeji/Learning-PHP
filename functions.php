<?php
// $x = 10;
function registerUser($email)
{
    // global $x;
    echo "$email registered";
}

// registerUser('adedejitewogbade2@gmail.com');

// function sum($n1 = 10, $n2 = 434)
// {
//     return $n1 + $n2;
// }

// $newNum = sum();
// echo $newNum;


$subtract = function ($n1, $n2) {
    return $n1 - $n2;
};


// echo $subtract(5, 10);

$multiply = fn ($n1, $n2) => $n1 * $n2;
echo $multiply(5, 10);
