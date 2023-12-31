<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixtures extends Model
{
    use HasFactory;
    protected $fillable = ['game_week', 'home_team', 'away_team', 'stadium', 'date', 'time', 'season'];
}
