<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array =[        	
    		'Personal' => 'Personal Work',
    		'Work' => 'Laravel Setup',
    		'Shopping' =>  'Must have'
        ];
        $users = App\User::all();
        	      
       

        foreach ($users as $user) {
        	foreach ($array as $name => $desc) {
        		$project = factory(App\Project::class, 1)->create([
        			'name' => $name,
        			'description' => $desc,
        			'user_id' => $user ->id,
        		]);

        		foreach (factory(App\Task::class, 10)->make() as $task) {
        			$project -> tasks()->save($task);
        		}
        	}
        }
    }
}
