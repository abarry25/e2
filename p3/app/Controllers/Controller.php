<?php

namespace App\Controllers;

class Controller
{
    protected $app;
    
    public function __construct($app)
    {
        $this->app = $app;
    }

// practice functions//

    public function roll() 
    {
        $possibleRoll = [
            'left',
            'right',
            'standing',
            'back',
            'leaning',
            'snout',
        ];
    
        return $possibleRoll[rand(0, 5)];

    }
  

}