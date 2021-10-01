<?php

//arrays for game, possible positions for pig rolls

$pig_position = [
    'left',
    'right',
    'standing',
    'back',
    'leaning',
    'snout', ];

//array for value of each possible possition
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

//these next loops show what points are aquired by player 1 when each type of roll is achieved//

$i = 0; 

//ROLL FUNCTION LOOP//
// for ($i = 0; $i < 5; $i++) {

for ($i = 0; $i < 20; $i++) {
    //variables settings pig rolls to generate random number
    $pig_a = rand(0, 5);
    $pig_b = rand(0, 5);

    //variables randomly generating a pig position for each rolled pig
    $pig_a_position = $pig_position[$pig_a];
    $pig_b_position = $pig_position[$pig_b];

    var_dump('Player 1 Turn');
    if ($pig_a_position == $pig_b_position) {
        if (($pig_a_position == 'left' and $pig_b_position = 'left') or ($pig_a_position == 'right' and $pig_b_position == 'right')) {
            $player1_score += 1;
            $read_out = 'Sider!';
            var_dump($read_out);
            var_dump($player1_score);
        } elseif ($pig_a_position == 'leaning' and $pig_b_position == 'leaning') {
            $player1_score += 60;
            $read_out = 'Double Leaning Jowler!';
            var_dump($read_out);
            var_dump($player1_score);
        } elseif ($pig_a_position == 'back' and $pig_b_position == 'back') {
            $player1_score += 20;
            $read_out = 'Double Razorback';
            var_dump($read_out);
            var_dump($player1_score);
        } elseif ($pig_a_position == 'standing' and $pig_b_position == 'standing') {
            $player1_score += 20;
            $read_out = 'Double Trotter!';
            var_dump($read_out);
            var_dump($player1_score);
        } elseif ($pig_a_position == 'snout' and $pig_b_position == 'snout') {
            $player1_score += 20;
            $read_out = 'Double Snouter!';
            var_dump($read_out);
            var_dump($player1_score);
        }

        //if the pig positions don't match, the player's score should be the addition of each of the sides values as shown in the array position_values
//if player 1 gets a left and a right position on their roll, they pig out, and the turn goes to Player 2
// have to updated pig_as + pig_bs to be specofoc to players (just copy rand function)
    } else {
        if (($pig_a_position == 'left' and $pig_b_position == 'right') or ($pig_a_position == 'right' and $pig_b_position == 'left')) {
            $player1_score = 0;
            $read_out = 'Pig Out!';
            $turn_over1 = true;
            var_dump($read_out);
            var_dump($player1_score);
            break;

        } else {
            $player1_score = $player1_score + $position_values[$pig_a_position] + $position_values[$pig_b_position];
            $read_out = 'Combo!';
            var_dump($read_out);
            var_dump($player1_score);
        }
    }

    if ($player1_score >= $win_score) {
        $read_out = 'Winner!';
        $game_over = true;
        break;
    }
    var_dump($pig_a_position);
    var_dump($pig_b_position);
};

var_dump($player1_score);
      
    //player2 rolls// 

    // $pig_a = rand(0,5);
    // $pig_b = rand(0,5);
    
    // //variables randomly generating a pig position for each rolled pig
    // $pig_a_position = $pig_position[$pig_a];
    // $pig_b_position = $pig_position[$pig_b];


    // var_dump('Player 2 rolls');
    //         if ($pig_a_position == $pig_b_position) {
    //             if (($pig_a_position == 'left' and $pig_b_position = 'left') or ($pig_a_position == 'right' and $pig_b_position == 'left')) {
    //                 $player2_score += 1;
    //                 $read_out = 'Sider!';
    //             var_dump($read_out);
    //             var_dump($player2_score);
    //             } elseif ($pig_a_position == 'leaning' and $pig_b_position == 'leaning') {
    //                 $player2_score += 60;
    //                 $read_out = 'Double Leaning Jowler!';
    //             var_dump($read_out);
    //             var_dump($player2_score);
    //             } elseif ($pig_a_position == 'back' and $pig_b_position == 'back') {
    //                 $player2_score += 20;
    //                 $read_out = 'Double Razorback';
    //             var_dump($read_out);
    //             var_dump($player2_score);
    //             } elseif ($pig_a_position == 'standing' and $pig_b_position == 'standing') {
    //                 $player2_score += 20;
    //                 $read_out = 'Double Trotter!';
    //             var_dump($read_out);
    //             var_dump($player2_score);
    //             } elseif ($pig_a_position == 'snout' and $pig_b_position == 'snout') {
    //                 $player2_score += 20;
    //                 $read_out = 'Double Snouter!';
    //                 var_dump($read_out);
    //                 var_dump($player2_score);
    //             }
        
    //     //if the pig positions don't match, the player's score should be the addition of each of the sides values as shown in the array position_values
    //     //if player 1 gets a left and a right position on their roll, they pig out, and the turn goes to Player 2
        
    //         } else {
    //             if (($pig_a_position == 'left' and $pig_b_position == 'right') or ($pig_a_position == 'right' and $pig_b_position == 'left')) {
    //             $player2_score = 0;
    //             $read_out = 'Pig Out!';
    //             $turn_over1 = true;
    //             break;

    //             } else {
    //             $player2_score = $player2_score + $position_values[$pig_a_position] + $position_values[$pig_b_position];
    //             $read_out = 'Combo!';
    //             var_dump($read_out);
    //             var_dump($player2_score);
    //             }
    //             }
    
    // if (($player1_score >= 100) and ($player2_score >= 100)) {
    //     max($player1_score, $player2_score);
    // }
    // };