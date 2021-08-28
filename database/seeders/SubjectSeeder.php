<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('subjects')->insert([[
            'name' => 'Maths',
            'created_at' => date("Y-m-d H:i:s") 
            
        ],
        [
        'name'=>'Science',
         'created_at' => date("Y-m-d H:i:s") 
        ],
        [
            'name'=>'History',
             'created_at' => date("Y-m-d H:i:s") 
            ]
        ]
        );
    }
}
