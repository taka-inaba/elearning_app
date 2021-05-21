<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lesson;
use App\Quiz;

class Category extends Model
{
    protected $fillable = [
        'title', 'description',
    ];

    public function quizzes(){

        return $this->hasMany('App\Quiz');
    }

    public function lessons(){

        return $this->hasMany('App\Lesson');
    }

}
