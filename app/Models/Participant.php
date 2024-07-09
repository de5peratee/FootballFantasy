<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $table = 'participants';

    protected $fillable = [
        'user_id',
        'arrangement',
        'finalScore',
        'transferBudget',
        'place'
    ];

    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class)->withTimestamps();
    }
}
