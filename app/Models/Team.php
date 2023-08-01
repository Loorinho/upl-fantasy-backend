<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
    ];


    /** A team has one manager */
    public function manager(): HasOne
    {
        return $this->hasOne(Manager::class);
    }

    /** A team has many players */
    public function players(): HasMany
    {
        return $this->hasMany(Player::class);
    }
}
