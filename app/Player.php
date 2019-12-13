<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';

    protected $primaryKey = 'id';

    protected $fillable = [
        'player_id', 
        'first_name', 
        'second_name', 
        'form', 
        'total_points', 
        'influence', 
        'creativity', 
        'threat', 
        'ict_index'
    ];

    protected $appends = ['fullname'];

    public function getFullnameAttribute()
    {
        return $this->attributes['first_name'] . ' ' . $this->attributes['second_name'];
    }
}
