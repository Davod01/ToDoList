<?php

use Illuminate\Database\Seeder;

class todo_list_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todo_lists')->truncate();
        
        $todo = [];
        for($i = 1;$i <= 20; $i++)
        {
            $todo[] = [
                'title' => "Todo List {$i}" ,
                'description' => 'Minus autem ad repellendus occaecati quaerat. Similique exercitationem dolor repudiandae rerum ut nihil quas. Perspiciatis ut itaque sapiente dolores nihil et.',
                'user_id' => rand(1,3)
            ];
        }

        DB::table('todo_lists')->insert($todo);
    }
}
