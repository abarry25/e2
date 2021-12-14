<?php
namespace App\Controllers;


class AppController extends Controller
{
    
    public function index()
    {
        $userSaved= $this->app->old('userSaved');
        $primaryName= $this->app->old('primaryName');

        return $this->app->view('index', [
            'userSaved' =>$userSaved,
            'primaryName'=>$primaryName,
        ]);
    }


    public function saveUser() {

        $this->app->validate([
            'primaryName' => 'required|minLength:2',
        ]);

        $primaryName = $this->app->input('primaryName');
    
        #to do : persist data to data base
        $this->app->db()->insert('users', [
            'primaryName'=> $primaryName
        ] );

        return $this->app->redirect('/', [
            'userSaved' => true,
            'primaryName'=> $primaryName,
        ]);

    }

    public function play()
    {
        $playerRoll = $this->app->old('playerRoll');
        $rollScore = $this->app->old('rollScore');
        $pig1position = $this->app->old('pig1position');
        $pig2position= $this->app->old('pig2position');
        $gameScore= $this->app->old('gameScore');
        $gamelength= $this->app->old('gameLength');
        $gameOver= $this->app->old('gameOver');
        $gameIndex= $this->app->old('gameIndex');
        $won= $this->app->old('won');
        
        return $this->app->view('play', [
            'playerRoll'=> $playerRoll,
            'rollScore'=>  $rollScore,
            'pig1position'=> $pig1position,
            'pig2position'=> $pig2position,
            'gameScore' => $gameScore,
            'gameLength'=> $gamelength,
            'gameOver'=> $gameOver,
            'gameIndex'=> $gameIndex,
            'won'=> $won,
        ]);
    }


    public function process() {
        $rounds = $this->app->db()->all('rounds');

        $game_score = $rounds[0]['gameScore'];
       
        if ($rounds[0]['gameOver'] == 1) {
            $game_index = $rounds[0]['gameIndex'] +1 ;
            $game_score = 0;
        } else {
            $game_index = $rounds[0]['gameIndex'];
        }
       
        $randNum = rand(0, 5);
 
        $pig_position = [
        'left',
        'right',
        'standing',
        'back',
        'leaning',
        'snout',
        ];
 
        $position_values = [
        'left' => 0,
        'right'=> 0,
        'standing'=> 5,
        'back'=> 5,
        'leaning'=> 15,
        'snout' => 10,
        ];
    
 
        # Creating an instance for these variables that will exist in the code
        $player_score = 0;
        $win_score = 100;
        $game_over = 0;
        $won = 0;

        $pig_a = rand(0, 5);
        $pig_b = rand(0, 5);

        $pig_a_position = $pig_position[$pig_a];
        $pig_b_position = $pig_position[$pig_b];

        $roll = ($pig_a_position . ' '. '+' . ' ' . $pig_b_position);
        $results = [];


        if ($pig_a_position == $pig_b_position) {
            if (($pig_a_position == 'left' and $pig_b_position == 'left') or ($pig_a_position == 'right' and $pig_b_position == 'right')) {
                $roll_score = 1;
                $combo_name = 'Sider';
                $game_score = $roll_score + $game_score;
            } elseif ($pig_a_position == 'leaning' and $pig_b_position == 'leaning') {
                $roll_score = 60;
                $combo_name = 'Double Leaning Jowler';
                $game_score = $roll_score + $rounds[0]['gameScore'];
            } elseif ($pig_a_position == 'back' and $pig_b_position == 'back') {
                $roll_score = 20;
                $combo_name = 'Double Razorback';
                $game_score = $roll_score + $game_score;
            } elseif ($pig_a_position == 'standing' and $pig_b_position == 'standing') {
                $roll_score = 20;
                $combo_name= 'Double Trotter';
                $game_score = $roll_score + $game_score;
            } elseif ($pig_a_position == 'snout' and $pig_b_position == 'snout') {
                $roll_score = 20;
                $combo_name = 'Double Snouter';
                $game_score = $roll_score + $game_score;
            }
        } else {
            if (($pig_a_position == 'left' and $pig_b_position == 'right') or ($pig_a_position == 'right' and $pig_b_position == 'left')) {
                $roll_score = 0;
                $combo_name = 'Pig Out';
                $game_score = 0;

            } else {
                $roll_score = $position_values[$pig_a_position] + $position_values[$pig_b_position];
                $combo_name = 'Combo';
                $game_score = $roll_score + $game_score;;
            }

        }

        if (($game_score >= 100)) {
            $won = 1;
            $game_over = 1;
          

        } elseif ($combo_name == 'Pig Out') {
            $won = 0;
            $game_over = 1;
        }
        

        # TO DO : PERSIST ROUND DETAILS TO THE DATABASE
        $this->app->db()->insert('rounds', [
            'playerRoll'=> $combo_name,
            'rollScore' => $roll_score,
            'playerScore'=>$player_score,
            'gameScore'=> $game_score,
            'timestamp'=> date('Y-m-d H:i:s'),
            'gameOver'=> $game_over,
            'gameIndex'=> $game_index,
        ]);
    
        $rounds2 = $this->app->db()->all('rounds');
        $game2 = $this->app->db()->findByColumn('rounds', 'gameIndex', '=', $game_index);
        $game_length = count($game2);


        return $this->app->redirect('/play', [
            'playerRoll'=> $combo_name,
            'rollScore' => $roll_score, 
            'pig1position'=> $pig_a_position,
            'pig2position'=> $pig_b_position,
            'playerScore'=> $player_score, 
            'gameScore'=> $game_score,
            'gameOver' => $game_over,
            'gameIndex'=> $game_index,
            'won' => $won,
            'gameLength'=> $game_length]);
    }

    public function roll()
    {
        return 'Hello from Roll!';
    }

    public function history()
    {
        $rounds = $this->app->db()->all('rounds');
    
        // return $this->app->view('history', ['rounds'=>$rounds]);

        $game = $this->app->db()->findByColumn('rounds', 'gameIndex', '=', $rounds[0]['gameIndex']);

        $maxGameIndex =  $rounds[0]['gameIndex'];
        
        return $this->app->view('history', ['rounds'=>$rounds, 'maxGameIndex'=>$maxGameIndex]);
    }

    public function round()
    {
        $id = $this->app->param('id');
        $won = $this->app->param('won');
        $round = $this->app->db()->findByID('rounds', $id);
        $winner = $this->app->db()->findByID('rounds', $won);
       
        return $this->app->view('round', [
            'round' => $round,
            'won' => $winner,
    ]);
    }

    public function rules()
    {
        return $this->app->view('rules', [
        ]);
    }
}