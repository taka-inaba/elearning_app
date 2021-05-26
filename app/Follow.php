<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        'user_id', 'follow_id',
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function activity(){

        return $this->morphMany('App\Activity', 'notifiable');
    }

}
