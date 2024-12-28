<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    /** @use HasFactory<\Database\Factories\AttendeeFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'conference_id',
        'is_paid'
    ];

    protected $casts = [
        'is_paid' => 'boolean',
        'conference_id' => 'integer',
    ];
}
