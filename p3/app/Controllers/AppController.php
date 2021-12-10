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
        $playerRoll = $this->app->old('playerRoll');
        $rollScore = $this->app->old('rollScore');
        $pig1position = $this->app->old('pig1position');
        $pig2position= $this->app->old('pig2position');
        

        
        return $this->app->view('play', [
            'playerRoll'=> $playerRoll,
            'rollScore'=>  $rollScore,
            'pig1position'=> $pig1position,
            'pig2position'=> $pig2position
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

    return $this->app->redirect('/rules', ['userSaved' => true]);

    }

    public function process() {
        // dump($this->app->inputAll());

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
       
    
        $pig_a = rand(0, 5);
        $pig_b = rand(0, 5);

        $pig_a_position = $pig_position[$pig_a];
        $pig_b_position = $pig_position[$pig_b];

        $roll = ($pig_a_position . ' '. '+' . ' ' . $pig_b_position);
        $results = [];


        if ($pig_a_position == $pig_b_position) {
            if (($pig_a_position == 'left' and $pig_b_position == 'left') or ($pig_a_position == 'right' and $pig_b_position == 'right')) {
                $roll_score = 1;
                $player_score = $player_score + $roll_score;
                $combo_name = 'Sider';
            } elseif ($pig_a_position == 'leaning' and $pig_b_position == 'leaning') {
                $roll_score = 60;
                $player_score = $player_score + $roll_score;
                $combo_name = 'Double Leaning Jowler';
            } elseif ($pig_a_position == 'back' and $pig_b_position == 'back') {
                $roll_score = 20;
                $player_score = $player_score + $roll_score;
                $combo_name = 'Double Razorback';
            } elseif ($pig_a_position == 'standing' and $pig_b_position == 'standing') {
                $roll_score = 20;
                $player_score = $player_score + $roll_score;
                $combo_name= 'Double Trotter';
            } elseif ($pig_a_position == 'snout' and $pig_b_position == 'snout') {
                $roll_score = 20;
                $player_score = $player_score + $roll_score;
                $combo_name = 'Double Snouter';
            }
        } else {
            if (($pig_a_position == 'left' and $pig_b_position == 'right') or ($pig_a_position == 'right' and $pig_b_position == 'left')) {
                $roll_score = 0;
                $combo_name = 'Pig Out';
            } else {
                $roll_score = $position_values[$pig_a_position] + $position_values[$pig_b_position];
                $player_score = $player_score + $roll_score;
                $combo_name = 'Combo';
            }
        }

        # TO DO : PERSIST ROUND DETAILS TO THE DATABASE

        $this->app->db()->insert('rounds', [
            'playerRoll'=> $combo_name,
            'rollScore' => $roll_score,
            'playerScore'=>$player_score,
            'timestamp'=> date('Y-m-d H:i:s')

]);

        return $this->app->redirect('/play', ['playerRoll'=> $combo_name, 'rollScore' => $roll_score, 'pig1position'=>$pig_a_position, 'pig2position'=>$pig_b_position, 'playerScore'=>$player_score]);


    }

    
     
            //  return $this->app->view('process', [
        //  'playerRoll' => $combo_name, 'rollScore' => $roll_score, 'pig1Position' => $pig_a_position, 'pig2Position' => $pig_b_position,
        //  'playerScore' =>$player_score]);
        
    

    public function roll()
    {
        return 'Hello from Roll!';
    }

    public function history()
    {
        $rounds = $this->app->db()->all('rounds');
    
        return $this->app->view('history', ['rounds'=>$rounds]);
    }

    public function round()
    {
    
        $id = $this->app->param('id');
        $round = $this->app->db()->findByID('rounds', $id);
        
        return $this->app->view('round', ['round' => $round]);
    }

    public function rules()
    {
        $userSaved =$this->app->old('userSaved');
        return $this->app->view('rules', [
            'userSaved' => $userSaved

        ]);
    }
}