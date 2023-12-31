<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'position',
        'foot',
        'shirt_number',
        'age',
        'team_id'
    ];


    /** A player belongs to a team */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
