<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("student_id")->unsigned();
            $table->bigInteger("term_id")->unsigned();
            $table->bigInteger("subject_id")->unsigned();
            $table->float("mark");
            $table->foreign("student_id")->references("id")->on("students")->onDelete("cascade");
            $table->foreign("term_id")->references("id")->on("terms")->onDelete("cascade");
            $table->foreign("subject_id")->references("id")->on("subjects")->onDelete("cascade");
            
  
   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
