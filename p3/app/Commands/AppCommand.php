<?php

namespace App\Commands;

class AppCommand extends Command
{

    public function fresh()
    {

        $this->migrate();
        $this->seedRounds();

        dump("migrate and seeds complete.");
    }

    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'choice' => 'varchar(8)',
            'computer' => 'varchar(8)',
            'win' => 'tinyint(1)',
            'tie' => 'tinyint(1)',

        ]);
    }

    public function seedRounds()
    {
        for ($i=0;$i<5;$i++) {
            $round = [
                'choice' => ['rock','paper','scissors'][rand(0,2)],
                'computer' => ['rock','paper','scissors'][rand(0,2)],
                    'win' => rand(0,1),
                    'tie' => rand(0,1)
            ];

            $this->app->db()->insert('rounds', $round);
        }
    }
}