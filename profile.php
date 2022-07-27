<?php
if (isset($_POST['submit'])) {
    $name =  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    echo "My name is $age and I am $age years old";
}
