<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conference extends Model
{
    /** @use HasFactory<\Database\Factories\ConferenceFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'venue',
        'start_at',
        'end_at',
        'speaker_name',
        'speaker_email',
        'ticket_cost',
    ];

    protected $casts = [
        'start_at' => 'datetime',
        'end_at' => 'datetime',
    ];

    public function attendees(): HasMany
    {
        return $this->hasMany(Attendee::class);
    }
}
