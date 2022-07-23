<?php
// $age = 15;

// if ($age >= 18) {
//     echo 'You are old enough to vote';
// } else {
//     echo 'Sorry, you are not old enough to vote';
// }

// $t = date("H");

// if ($t < 12) {
//     echo 'Good morning';
// } elseif ($t < 17) {
//     'Good Afternoon';
// } else {
//     echo 'Good Evening';
// }

// $posts = ['First Post'];

// if (empty($posts)) {
//     echo 'No post';
// } else {
//     echo $posts;
// }
// echo empty($posts) ? 'No posts' : $posts[0];

$favColor = 'yellow';

switch ($favColor) {
    case 'red':
        echo 'red';
        break;
    case 'blue':
        echo 'blue';
        break;
    case 'green':
        echo 'green';
        break;
    default:
        echo 'Not here';
}
