<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'run_id', 'distance', 'time', 'wind', 'rating'
    ];

    //Relationships
    public function run(){
        return $this->belongsTo(Run::class);
    }
}
