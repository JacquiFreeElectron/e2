<?php

session_start();

$choice = $_POST['choice'];

$computer = ['rock','paper','scissors'][rand(0,2)];

$isTie = $choice == $computer;

$isWin = (($choice == 'rock')&&($computer == 'scissors')) or (($choice == 'scissors')&&($computer == 'paper')) or (($choice == 'paper')&&($computer == 'rock'));

var_dump($isTie);
var_dump($choice);
var_dump($isWin);
var_dump($computer);

$_SESSION['result'] = [
    'choice' => $choice,
    'computer' => $computer,
    'isTie' => $isTie,
    'isWin' => $isWin 
];

header('Location: index.php');