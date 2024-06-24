<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DoctorsAppointment extends Model
{
    protected $fillable = [
        'name', 'email', 'phone','department', 'message'
    ];
}
