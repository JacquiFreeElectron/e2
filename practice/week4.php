<?php

$moves = ['rock','paper','scissors']; # Array of strings

// echo $moves[0];

$randomnumber = rand(0, 2);

$move = $moves[$randomnumber];

// var_dump($move);

# Assiociative arrays
$coin_values = [
    'penny' => .01,
    'nickel' => .05,
    'dime' => .10,
    'quarter' => .25
];

$coin_count = [
    'penny' => 300,
    'nickel' => 5,
    'dime' => 0,
    'quarter' => 125
];


asort($coin_values); #from low to high accoring to values

arsort($coin_values); #from high to low according to values

ksort($coin_values); #from low to high accoring to keys

krsort($coin_values); #from high to low according to keys

foreach($coin_values as $key => $value) { #order matters! name doesn't matter!
    var_dump($value);
}

$total = 0;
//foreach($coin_count as $coin => $count) {
//    $total = $total + ($count * $coin_values[$coin]);
//}
//var_dump($total);

# multidimensional array

$coins = [
    'penny' => [300, 0.1],
    'nickel' => [5, .05],
    'dime' => [0, .10],
    'quater' => [125, .25]
];

foreach ($coins as $coin => $info) {
    $total = $total + ($info[0] * $info[1]);
}

var_dump($total);