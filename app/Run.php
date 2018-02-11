<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Run extends Model
{
    protected $fillable = [
        'track_id', 'is_competition', 'competition_name'
    ];

    //Relationships
    public function track(){
        return $this->belongsTo(Track::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }
}
