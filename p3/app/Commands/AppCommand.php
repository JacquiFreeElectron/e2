<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'choice' => 'varchar(8)',
            'won' => 'boolean',
            'tie' => 'boolean',
           
        ]);
        
    }

    public function seedRounds()
{
   
    $round = [
        'choice' => 'paper',
            'won' => 1,
            'tie' => 0,
            
    ];

    
    $this->app->db()->insert('rounds', $round);
}
}