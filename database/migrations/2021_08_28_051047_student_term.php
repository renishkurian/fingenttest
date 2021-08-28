<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentTerm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_term', function (Blueprint $table) {
            $table->bigInteger("term_id")->unsigned();
            $table->bigInteger("student_id")->unsigned();
            $table->foreign("term_id")->references("id")->on("terms")->onDelete("cascade");
            $table->foreign("student_id")->references("id")->on("students")->onDelete("cascade");
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
            Schema::dropIfExists('student_term');
    
    }
}
