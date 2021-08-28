<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Term;
use App\Models\Subject;
class TermSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $terms=Term::all();

    $subject=Subject::pluck("id");
      foreach($terms as $row){
          $row->subject()->attach($subject);
      }



       
    }
}
