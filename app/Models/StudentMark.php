<?php
namespace App\Pivots;
    
use Illuminate\Database\Eloquent\Relations\Pivot;

class StudentMark extends Pivot {
    
    public function term()
    {
        return $this->belongsTo('App\term');
    }
    
    public function podcast()
    {
        return $this->belongsTo('App\Podcast');
    }
    
    public function getmark(){
    
    {
    return $this->hasMany('App\mark');
    }
    
    public function audioFiles()
    {
        return $this->hasManyThrough('App\AudioFiles', 'App\Podcast');
    }
   
}
