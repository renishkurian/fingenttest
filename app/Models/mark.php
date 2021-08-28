<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mark extends Model
{
    use HasFactory;

    protected $fillable=["student_id","term_id","maths","history","science"];

    function student(){
        return $this->hasOne(student::class,"id","student_id");
    }

    function term(){
        return $this->hasOne(Term ::class,"id","term_id");
    }
 
}
