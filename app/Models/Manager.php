<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Manager extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'team_id',
        'age',
    ];


    /** A manager belongs to a team */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
