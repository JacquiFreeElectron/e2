<?php

session_start();
$result = $_SESSION['result'];
$correct = $result['correct'];


require 'index-view.php';