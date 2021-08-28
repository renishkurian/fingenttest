<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    /**
     * Get the user that owns the student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    protected $fillable=['name', 'age', 'gender','teacher_id'];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    function term(){

            return $this->belongsToMany(Term::class, 'student_term', 'student_id','term_id');

        
        
    }
}
