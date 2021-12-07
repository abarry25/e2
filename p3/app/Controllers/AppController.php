<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        return $this->app->view('index', []);
    }

    public function play()
    {

    $userSaved =$this->app->old('userSaved');
    
    return $this->app->view('play', [
    'userSaved' => $userSaved
    ]);

    }


    public function game()
    {
    $randNum = rand(0, 5);

    //assumptions, givens, constants

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
    $computer_score = 0;
    $win_score = 100;
    $player1_turn_results = [];
    $player2_turn_results = [];

    #create an if statement
    #build a function for the roll

    $pig_a = rand(0, 5);
    $pig_b = rand(0, 5);

    $pig_a_position = $pig_position[$pig_a];
    $pig_b_position = $pig_position[$pig_b];

    $roll = ($pig_a_position . ' '. '+' . ' ' . $pig_b_position);
    $results = [];

  
    if ($pig_a_position == $pig_b_position) {
        if (($pig_a_position == 'left' and $pig_b_position == 'left') or ($pig_a_position == 'right' and $pig_b_position == 'right')) {
            $roll_score = 1;
            $combo_name = '
            Sider';
        } elseif ($pig_a_position == 'leaning' and $pig_b_position == 'leaning') {
            $roll_score = 60;
            $combo_name = 'Double Leaning Jowler';
        } elseif ($pig_a_position == 'back' and $pig_b_position == 'back') {
            $roll_score = 20;
            $combo_name = 'Double Razorback';
        } elseif ($pig_a_position == 'standing' and $pig_b_position == 'standing') {
            $roll_score = 20;
            $combo_name= 'Double Trotter';
        } elseif ($pig_a_position == 'snout' and $pig_b_position == 'snout') {
            $roll_score = 20;
            $combo_name = 'Double Snouter';
        }
    } else {
        if (($pig_a_position == 'left' and $pig_b_position == 'right') or ($pig_a_position == 'right' and $pig_b_position == 'left')) {
            $roll_score = 0;
            $combo_name = 'Pig Out';
        } else {
            $roll_score = $position_values[$pig_a_position] + $position_values[$pig_b_position];
            $combo_name = 'Combo';
        }
    }
    
        return $this->app->view('game', [
        'playerRoll' => $combo_name, 'rollScore' => $roll_score, 'pig1Position' => $pig_a_position, 'pig2Position' => $pig_b_position,
        ]);

    }















    public function saveUser() {

        $this->app->validate([
            'name' => 'required|minLength:2',
            'email' => 'required|email'
        ]);
        
        $name = $this->app->input('name');
        $email = $this->app->input('email');

    #to do : persist data to data base

    return $this->app->redirect('/play', ['userSaved' => true]);

    }















    public function roll()
    {
        return 'Hello from Roll!';
    }

    public function history()
    {
        return $this->app->view('history', []);
    }

    public function rules()
    {
        return $this->app->view('rules', []);
    }
}