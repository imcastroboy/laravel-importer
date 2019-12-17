<?php

namespace App;

use App\Stats;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';

    protected $primaryKey = 'id';

    protected $guarded = [];

    protected $appends = ['fullname'];

    public function getFullnameAttribute()
    {
        return $this->attributes['first_name'] . ' ' . $this->attributes['second_name'];
    }

    public function stats()
    {
        return $this->hasOne(Stats::class, 'player_id', 'id');
    }
}
