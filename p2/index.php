<?php

session_start();

if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $winner = $_SESSION['results']['winner'];
    $message = $_SESSION['results']['message'];
    $computer_option = $_SESSION['results']['computer_option'];
    $decision = $_SESSION['results']['decision'];

    // var_dump($winner);
    // var_dump($message);
    // var_dump($computer_option);
    // var_dump($decision);
}

$_SESSION['results'] = null;

require 'index-view.php';