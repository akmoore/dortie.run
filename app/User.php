<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'full_name'
            ]
        ];
    }

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
        'slug',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = [
        'full_name'
    ];

    //Attributes
    public function getFullNameAttribute(){
        return "{$this->first_name} {$this->last_name}";
    }

    //Relationships
    public function tracks(){
        return $this->belongsToMany(Track::class);
    }
}
