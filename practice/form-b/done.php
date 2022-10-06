<?php
session_start();
$result = $_SESSION['result'];
$correct = $result['correct'];

require 'done-view.php';