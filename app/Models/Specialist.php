<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $fillable = [
        'name', 'surname','patronymic', 'position','information','image'
    ];
}
