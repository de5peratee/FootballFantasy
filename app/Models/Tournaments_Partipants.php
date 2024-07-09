<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournaments_Partipants extends Model
{
    use HasFactory;
    protected $table = 'participant_tournament';

    protected $fillable = [
        'participant_id',
        'tournament_id',
    ];
}
