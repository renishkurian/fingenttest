<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\Teacher::factory(10)->create();
       $this->call([
        //TeacherSeeder::class,
       // TermSeeder::class,
        //SubjectSeeder::class
        TermSubjectSeeder::class
    
    ]);
    }
}
