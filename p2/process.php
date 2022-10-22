<?php

session_start();

$choice = $_POST['choice'];

$computer = ['rock','paper','scissors'][rand(0,2)];

$isTie = $choice == $computer;

$isWin = ($choice == 'rock' && $computer == 'scissors') || ($choice == 'scissors' && $computer == 'paper') || ($choice == 'paper' && $computer == 'rock');

$_SESSION['result'] = [
    'choice' => $choice,
    'computer' => $computer,
    'isTie' => $isTie,
    'isWin' => $isWin 
];

header('Location: index.php');