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

            return $this->belongsToMany(Term::class);

        
        
    }

function test(){

    return $this->hasMany(mark::class);
}
    function mark(){

        
                return $this->belongsToMany(mark::class, 'student_term', 'term_id','student_id');
    
            
            
        
    }
    // function studet_mark(){

    //     return $this->hasManyThrough("App\term", student::class, 'term_id', 'student_id');
    
    //     }
}
