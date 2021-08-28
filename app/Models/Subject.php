<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    function term(){
        /**
         * The roles that belong to the Term
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
    
            return $this->hasMany(Term::class, 'term_subject','term_id','subject_id');

        
        
    }
    function mark(){
        return $this->hasone(mark::class);
    }
}
