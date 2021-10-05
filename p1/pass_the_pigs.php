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


//establishing starting points and defined variables
$player1_score = 0;
$player2_score = 0;
$win_score = 100;
$player_turns = 50;
$i = 0; 
$j = 0; 
$player1_turn_results = [];
$player2_turn_results = [];


for ($j = 0; $j < 5; $j++) {
    
    $player1_points = [];
    $player2_points = [];
    $player1_rolls = [];
    $player2_rolls = [];

    $player1_roll_history = [];
    $player2_roll_history = [];

 //Start of Loop #1 : Player 1's Roll   
    for ($i = 0; $i < $player_turns; $i++) {
        $pig_a = rand(0, 5);
        $pig_b = rand(0, 5);

        $pig_a_position = $pig_position[$pig_a];
        $pig_b_position = $pig_position[$pig_b];

        if ($pig_a_position == $pig_b_position) {
            if (($pig_a_position == 'left' and $pig_b_position = 'left') or ($pig_a_position == 'right' and $pig_b_position == 'right')) {
                $player1_score += 1;
                $read1_out = 'Sider';
                // var_dump($read1_out);
                // var_dump($player1_score);

            } elseif ($pig_a_position == 'leaning' and $pig_b_position == 'leaning') {
                $player1_score += 60;
                $read1_out = 'Double Leaning Jowler';
                // var_dump($read1_out);
                // var_dump($player1_score);

            } elseif ($pig_a_position == 'back' and $pig_b_position == 'back') {
                $player1_score += 20;
                $read1_out = 'Double Razorback';
                // var_dump($read1_out);
                // var_dump($player1_score);

            } elseif ($pig_a_position == 'standing' and $pig_b_position == 'standing') {
                $player1_score += 20;
                $read1_out = 'Double Trotter';
                // var_dump($read1_out);
                // var_dump($player1_score);

            } elseif ($pig_a_position == 'snout' and $pig_b_position == 'snout') {
                $player1_score += 20;
                $read1_out = 'Double Snouter';
                // var_dump($read1_out);
                // var_dump($player1_score);
            }

        } else {
            if (($pig_a_position == 'left' and $pig_b_position == 'right') or ($pig_a_position == 'right' and $pig_b_position == 'left')) {
                $player1_score = 0;
                $read1_out = 'Pig Out';
                // $turn_over1 = true;
                // var_dump($read1_out);
                // var_dump($player1_score);
                array_push($player1_rolls, $read1_out);
                array_push($player1_points, $player1_score);
                break;

            } else {
                $player1_score = $player1_score + $position_values[$pig_a_position] + $position_values[$pig_b_position];
                $read1_out = 'Combo';
                // var_dump($read1_out);
                // var_dump($player1_score);
            }
        
        }
        array_push($player1_rolls, $read1_out);
        array_push($player1_points, $player1_score);
        if ($player1_score >= $win_score) {
            $game_over = true;
            break;
            }
        array_push($player1_roll_history, $read1_out);
        var_dump($player1_roll_history);
    };
    
    $turn1_results = '';
    foreach ($player1_roll_history as $round_roll) {
    $turn1_results = $turn1_results . $round_roll . '...';
    }

    array_push($player1_turn_results, $turn1_results);

    //Start of Loop #2 : Player 2's Roll
    for ($i = 0; $i < $player_turns; $i++) {

            $pig_a = rand(0, 5);
            $pig_b = rand(0, 5);

            $pig_a_position = $pig_position[$pig_a];
            $pig_b_position = $pig_position[$pig_b];

            if ($pig_a_position == $pig_b_position) {
                if (($pig_a_position == 'left' and $pig_b_position = 'left') or ($pig_a_position == 'right' and $pig_b_position == 'right')) {
                    $player2_score += 1;
                    $read2_out = 'Sider';
                    // var_dump($read2_out);
                    // var_dump($player2_score);

                } elseif ($pig_a_position == 'leaning' and $pig_b_position == 'leaning') {
                    $player2_score += 60;
                    $read2_out = 'Double Leaning Jowler';
                    // var_dump($read2_out);
                    // var_dump($player2_score);

                } elseif ($pig_a_position == 'back' and $pig_b_position == 'back') {
                    $player2_score += 20;
                    $read2_out = 'Double Razorback';
                    // var_dump($read2_out);
                    // var_dump($player2_score);

                } elseif ($pig_a_position == 'standing' and $pig_b_position == 'standing') {
                    $player2_score += 20;
                    $read2_out = 'Double Trotter';
                    // var_dump($read2_out);
                    // var_dump($player2_score);

                } elseif ($pig_a_position == 'snout' and $pig_b_position == 'snout') {
                    $player2_score += 20;
                    $read2_out = 'Double Snouter';
                    // var_dump($read2_out);
                    // var_dump($player2_score);
                }
    
            
            } else {
                if (($pig_a_position == 'left' and $pig_b_position == 'right') or ($pig_a_position == 'right' and $pig_b_position == 'left')) {
                    $player2_score = 0;
                    $read2_out = 'Pig Out';
                    // $turn_over1 = true;
                    // var_dump($read2_out);
                    // var_dump($player2_score);
                    array_push($player2_rolls, $read2_out);
                    array_push($player2_points, $player2_score);
                    break;
                } else {
                    $player2_score = $player2_score + $position_values[$pig_a_position] + $position_values[$pig_b_position];
                    $read2_out = 'Combo';
                    // var_dump($read2_out);
                }
            }
            array_push($player2_rolls, $read2_out);
            array_push($player2_points, $player2_score);
                if ($player2_score >= $win_score) {
                    $game_over = true;
                    break;
                }
            array_push($player2_roll_history, $read2_out);
            var_dump($player2_roll_history);
        };
    
    if (($player1_score >= $win_score) or ($player2_score >= $win_score)) {
            // $results [] = [
            //     'Player1' => $player1_score,
            //     'Player2' => $player2_score,
            //     'Player1_read' => $read1_out,
            //     'Player2_read' => $read2_out,
            // ];
        if ($player1_score == $player2_score) {
            $game_result = "Tie!";
        } elseif ($player1_score > $player2_score) {
            $game_result = "Player 1 wins!";
        } elseif ($player1_score < $player2_score) {
            $game_result = "Player 2 wins!";
        }
        break;
    };

    $turn2_results = '';
    foreach ($player2_roll_history as $round_roll) {
    $turn2_results = $turn2_results . $round_roll . '...';
    }

    array_push($player2_turn_results, $turn2_results);
    
    $results [] = [
                'Player1' => $player1_score,
                'Player2' => $player2_score,
                'Player1_read' => $player1_roll_history,
                'Player2_read' => $player2_roll_history,
            ];

};


//Foreach's to display results of each roll in the final round before the game ends.

$player1_rolls_display = '';
foreach ($player1_rolls as $rolls) {
$player1_rolls_display = $player1_rolls_display . $rolls . '... ';
}

$player2_rolls_display = '';
foreach ($player2_rolls as $rolls) {
$player2_rolls_display = $player2_rolls_display . $rolls . '... ';
}

$player1_points_display = '';
foreach ($player1_points as $points) {
$player1_points_display = $player1_points_display . $points. '... ';
}

$player2_points_display = '';
foreach ($player2_points as $points) {
$player2_points_display = $player2_points_display . $points. '... ';
}


require 'pigs_view.php';