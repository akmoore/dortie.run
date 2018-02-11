<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = [
        'name', 'surface', 'indoor', 'city',
        'state', 'street'
    ];

    //Relationships
    public function runs(){
        return $this->hasMany(Run::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
