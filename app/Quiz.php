<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'category_id', 'text', 'choice1', 'choice2', 'choice3', 'choice4', 'answer',
    ];
}
