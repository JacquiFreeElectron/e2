<?php

// Create an array, with three elements: Rock, Paper, Scissors
$throws = ['Rock','Paper','Scissors'];
// + Player A and Player B choose a random element from the array respectively
$playerA = $throws[rand(0,2)];
$playerB = $throws[rand(0,2)];
// Comparing the elements that Player A and Player B chose to pick the winner 
// if Player A and Player B chose the same thing, they tie
if ($playerA == $playerB){
    $result = "Tie!";
} else {
    // The rule is: Rock beats Scissors, Scissors beats Paper, Paper beats Rock
    if ((($playerA == 'Rock') && ($playerB == 'Paper')) || (($playerA == 'Paper') && ($playerB =='Scissors')) || (($playerA == 'Scissors') && ($playerB == 'Rock'))) {
        $result = "Player B is the winner!";
    } else {
        if ((($playerB == 'Rock') && ($playerA == 'Paper')) || (($playerB == 'Paper') && ($playerA =='Scissors')) || (($playerB == 'Scissors') && ($playerA == 'Rock'))) {
            $result = "Player A is the winner!";
        }
    }
} 

// Give accumulative results of our game
$results [] = [
    'playerA' => $playerA,
    'playerB' => $playerB,
    'result' => $result
];

require 'index-view.php';