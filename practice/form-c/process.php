<?php

session_start();

$answer = $_GET['answer'];

$correct = $answer == 'pumpkin';

$_SESSION['result'] = 
[
    'correct' => $correct,
    'answer' => $answer
];

//var_dump($_SESSION);
header('Location: index.php');