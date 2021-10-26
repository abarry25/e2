<?php 

session_start();

var_dump($_POST);

$decision = $_POST['decision'];

#game logic can go here! 


function throwOptions($computer_option, $decision) 
{

$function_results = [];

if ($decision == $computer_option ) {
    $message = 'You tied! Play again.';
    $winner = false;
} elseif ($decision == 'rock' and $computer_option == 'paper') {
    $message = 'You lost, play again.';
    $winner = false; 
} elseif ($decision == 'rock' and $computer_option == 'scissors') {
    $message = 'You win!';
    $winner = true;
} elseif ($decision == 'paper' and $computer_option == 'rock') {
    $message = 'You win!';
    $winner = true;
} elseif ($decision == 'paper' and $computer_option == 'scissors') {
    $message = 'You lost, play again.';
    $winner = false;
} elseif ($decision == 'scissors' and $computer_option == 'paper') {
    $message = 'You win!';
    $winner = true;
} elseif ($decision == 'scissors' and $computer_option == 'rock') {
    $message = 'You lost, play again.';
    $winner = false; 
}

array_push($function_results, $message, $winner);
return $function_results;

}


function computerThrow() 
{
    $option = [
        'rock',
        'paper',
        'scissors',
    ];

    return $option[rand(0, 2)];

}

$computer_option = computerThrow(); # rock, paper, or scissors
$throw_results = throwOptions($computer_option,$decision);

$_SESSION['results'] = [
    'winner' => $throw_results[1],
    'message' => $throw_results[0],
    'computer_option' => $computer_option,
    'decision' => $decision
];



header('Location: index.php');