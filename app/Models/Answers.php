<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $fillable = [
        'name', 'phone', 'email','question_id', 'answer'
    ];
}
