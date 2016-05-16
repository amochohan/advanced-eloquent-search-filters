<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    protected $fillable = [
        'event_id',
        'user_id',
        'responded_at',
        'response'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
