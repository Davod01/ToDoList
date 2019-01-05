<?php

use Illuminate\Database\Seeder;

class Task_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS=0");
        DB::table('tasks')->truncate();

        $date = date("Y-m-d H:i:s");
        $count =0;
        $task = [];
        for($i=1;$i <= 20 ; $i++){
            for($j=1; $j <= rand(2,7);$j++){
                $count++;
                $task[] = [
                    'title' => 'Task ' . $count,
                    'todo_list_id' => $i,
                    'completed_at' => rand(1,2) == 2 ? $date:NULL
                ];
            }
        }

        DB::table('tasks')->insert($task);
    }
}
