<?php

session_start();

if(!is_null($_SESSION['result'])) {
    $result = $_SESSION['result'];
    $correct = $result['correct'];

    $_SESSION['result'] = null;

}


require 'index-view.php';