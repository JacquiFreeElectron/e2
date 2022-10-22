<?php

session_start();

if (isset($_SESSION['result'])) {
    $result = $_SESSION['result'];
    $choice = $result['choice'];
    $computer = $result['computer'];
    $isTie = $result['isTie'];
    $isWin = $result['isWin'];

    $_SESSION['result'] = null;
}

require 'index-view.php';