<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{

    public function fresh() {
        $this->migrate();
        $this->seed();
    }
    public function migrate() {

        $this->app->db()->createTable('rounds', [
            'playerRoll' => 'varchar(255)',
            'rollScore' => 'int',
            'playerScore' => 'int',
            'timestamp' => 'timestamp',
            'gameScore' => 'int',
            'gameOver' => 'int',
            'gameIndex'=> 'int'
        ]);

        dump('Migrations Complete');
    }

    public function seed() 
    {
        $faker = Factory::create();
        
        for ($i = 10; $i > 0; $i--) {
            $this->app->db()->insert('rounds', [
                'playerRoll' => ['combo','Pig Out'][rand(0,1)],
                'rollScore' => rand(0,5),
                'timestamp' => $faker->dateTimeBetween('-'.$i.'days', '-'.$i.'days')->format('Y-m-d H:i:s'),
                'gameScore'=> 0,
                'gameOver'=> 0,
                'gameIndex'=> 0,
            ]);
            
        }
        dump('success!');
    }
}