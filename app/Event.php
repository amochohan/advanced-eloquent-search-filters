<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'city',
        'starts_at',
        'finishes_at',
    ];
}
