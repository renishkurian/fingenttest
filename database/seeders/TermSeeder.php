<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terms')->insert([[
            'name' => 'One',
            'created_at' => date("Y-m-d H:i:s") 
            
        ],
        [
        'name'=>'Two',
         'created_at' => date("Y-m-d H:i:s") 
        ],
        [
            'name'=>'Three',
             'created_at' => date("Y-m-d H:i:s") 
            ]
        ]
        );
    }
}
