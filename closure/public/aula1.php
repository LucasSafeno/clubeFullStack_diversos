<?php


// $numbers = [1, 2, 3, 4, 5, 6];

// $multipliedBy2 = array_map(function ($number) {
//     var_dump($number * 2);
// }, $numbers);

// function multiply($number)
// {
//     var_dump($number * 2);
// }

// $multipliedBy2 = array_map('multiply', $numbers);


function doubleNumber($callback, $number)
{
    if (is_callable($callback)) {
        $callback($number);
    }

}

doubleNumber(function ($number) {
    var_dump($number * 2);

}, 5);



?>