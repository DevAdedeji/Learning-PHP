<?php

function inverse($x)
{
    if (!$x) {
        throw new Exception('Devision by Zero');
    }
    return 1 / $x;
}

try {
    echo inverse(5);
    echo inverse(0);
} catch (Exception $e) {
    echo 'Caught Exception ', $e->getMessage(), ' ';
} finally {
    echo 'First Finally ';
}

echo 'Hello World';
