<?php

$input = 'g';
$data = array('orange', 'blue', 'green', 'red', 'pink', 'brown', 'black');


$result = array_filter($data, function ($item) use ($input) {
    if (stripos($item, $input) !== false) {
        return true;
    }
    return false;
});

print_r ($result);


?>
