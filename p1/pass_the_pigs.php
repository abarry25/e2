<?php

$pig_position = [
    'left',
    'right',
    'standing',
    'back',
    'leaning',
    'snout', ];

$position_values = [
    'left' => 0,
    'right'=> 0,
    'standing'=> 5,
    'back'=> 5,
    'leaning'=> 15,
    'snout' => 10,
];

//variables settings pig rolls to generate random number
$pig_a = rand(0,5);
$pig_b = rand(0,5);

//variables randomly generating a pig position for each rolled pig
$pig_a_position = $pig_position[$pig_a];
$pig_b_position = $pig_position[$pig_b];

// var_dump($pig_a_position);

//player score has to start at 0
$player1_score = 0;
$player2_score = 0;
$win_score = 100;
$player_turns = 50;

//these next loops show what points are aquired by player 1 when each type of roll is achieved//

$i = 0; 
$j = 0; 


for ($j = 0; $j < 5; $j++) {
    var_dump('Player 1 BEGIN');
    for ($i = 0; $i < $player_turns; $i++) {
        $pig_a = rand(0, 5);
        $pig_b = rand(0, 5);

        //variables randomly generating a pig position for each rolled pig
        $pig_a_position = $pig_position[$pig_a];
        $pig_b_position = $pig_position[$pig_b];

    
    
        // var_dump('Player 1 Turn');
        if ($pig_a_position == $pig_b_position) {
            if (($pig_a_position == 'left' and $pig_b_position = 'left') or ($pig_a_position == 'right' and $pig_b_position == 'right')) {
                $player1_score += 1;
                $read1_out = 'Sider!';
                var_dump($read1_out);
                var_dump($player1_score);
            } elseif ($pig_a_position == 'leaning' and $pig_b_position == 'leaning') {
                $player1_score += 60;
                $read1_out = 'Double Leaning Jowler!';
                var_dump($read1_out);
                var_dump($player1_score);
            } elseif ($pig_a_position == 'back' and $pig_b_position == 'back') {
                $player1_score += 20;
                $read1_out = 'Double Razorback';
                var_dump($read1_out);
                var_dump($player1_score);
            } elseif ($pig_a_position == 'standing' and $pig_b_position == 'standing') {
                $player1_score += 20;
                $read1_out = 'Double Trotter!';
                var_dump($read1_out);
                var_dump($player1_score);
            } elseif ($pig_a_position == 'snout' and $pig_b_position == 'snout') {
                $player1_score += 20;
                $read1_out = 'Double Snouter!';
                var_dump($read1_out);
                var_dump($player1_score);
            }
        } else {
            if (($pig_a_position == 'left' and $pig_b_position == 'right') or ($pig_a_position == 'right' and $pig_b_position == 'left')) {
                $player1_score = 0;
                $read1_out = 'Pig Out!';
                $turn_over1 = true;
                var_dump($read1_out);
                var_dump($player1_score);
                break;
            } else {
                $player1_score = $player1_score + $position_values[$pig_a_position] + $position_values[$pig_b_position];
                $read1_out = 'Combo!';
                var_dump($read1_out);
                var_dump($player1_score);
            }
        
            // var_dump($pig_a_position);
            // var_dump($pig_b_position);
            var_dump($read1_out);
            var_dump($player1_score);
        }
        if ($player1_score >= $win_score) {
            $game_over = true;
            break;
        }
    };

        //PLAYER 2 TURN LOOP
        var_dump('Player 2 BEGIN');
    for ($i = 0; $i < $player_turns; $i++) {
            //variables settings pig rolls to generate random number
            $pig_a = rand(0, 5);
            $pig_b = rand(0, 5);

            //variables randomly generating a pig position for each rolled pig
            $pig_a_position = $pig_position[$pig_a];
            $pig_b_position = $pig_position[$pig_b];

            // var_dump('Player 2 Turn');
            if ($pig_a_position == $pig_b_position) {
                if (($pig_a_position == 'left' and $pig_b_position = 'left') or ($pig_a_position == 'right' and $pig_b_position == 'right')) {
                    $player2_score += 1;
                    $read2_out = 'Sider!';
                    var_dump($read2_out);
                    var_dump($player2_score);
                } elseif ($pig_a_position == 'leaning' and $pig_b_position == 'leaning') {
                    $player2_score += 60;
                    $read2_out = 'Double Leaning Jowler!';
                    var_dump($read2_out);
                    var_dump($player2_score);
                } elseif ($pig_a_position == 'back' and $pig_b_position == 'back') {
                    $player2_score += 20;
                    $read2_out = 'Double Razorback';
                    var_dump($read2_out);
                    var_dump($player2_score);
                } elseif ($pig_a_position == 'standing' and $pig_b_position == 'standing') {
                    $player2_score += 20;
                    $read2_out = 'Double Trotter!';
                    var_dump($read2_out);
                    var_dump($player2_score);
                } elseif ($pig_a_position == 'snout' and $pig_b_position == 'snout') {
                    $player2_score += 20;
                    $read2_out = 'Double Snouter!';
                    var_dump($read2_out);
                    var_dump($player2_score);
                }
            } else {
                if (($pig_a_position == 'left' and $pig_b_position == 'right') or ($pig_a_position == 'right' and $pig_b_position == 'left')) {
                    $player2_score = 0;
                    $read2_out = 'Pig Out!';
                    $turn_over1 = true;
                    var_dump($read2_out);
                    var_dump($player2_score);
                    break;
                } else {
                    $player2_score = $player2_score + $position_values[$pig_a_position] + $position_values[$pig_b_position];
                    $read2_out = 'Combo!';
                    var_dump($read2_out);
                }
           
                // var_dump($pig_a_position);
                // var_dump($pig_b_position);
            }
            if ($player2_score >= $win_score) {
                $game_over = true;
                break;
            }

            var_dump($player2_score);

            //SCORE CLAUSE
        
        };
    
    if (($player1_score >= $win_score) or ($player2_score >= $win_score)) {
        if ($player1_score == $player2_score) {
            $game_result = "Tie!";
        } elseif ($player1_score > $player2_score) {
            $game_result = "Player 1 wins!";
        } elseif ($player1_score < $player2_score) {
            $game_result = "Player 2 wins!";
        }
        var_dump('game over');
    
        break;
    };
};



require 'pigs_view.php';
var_dump($player1_score);
var_dump($player2_score);
var_dump($game_result);