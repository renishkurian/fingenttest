<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;

    function subject(){
        /**
         * The roles that belong to the Term
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
    
            return $this->belongsToMany(Subject::class, 'term_subject', 'subject_id','term_id');

        
        
    }

}
