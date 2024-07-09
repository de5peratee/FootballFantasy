<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $table = 'tournament';
    protected $fillable = [
        'creatorID',
        'name',
        'budget',
        'date',
        'iterationDuration',
        'iteration',
        'participant',
        'timer',
        'password',
        'league',
        'status',
    ];

    public function participants()
    {
        return $this->belongsToMany(Participant::class)->withTimestamps();
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creatorID');
    }

    public function timeUntilStart()
    {
        $startDateTime = Carbon::parse($this->date);
        $now = Carbon::now();

        $diff = $startDateTime->diff($now);

        $timeUntilStart = $diff->format('%dд %hч %im %ss');

        return $timeUntilStart;
    }

    public function userParticipates($userId)
    {
        return $this->participants()->where('user_id', $userId);
    }
}
