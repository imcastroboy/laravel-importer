<?php

namespace App;

use App\Player;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $primarykey = 'id';

    protected $table = 'stats';

    protected $guarded = [];
    

    public function player()
    {
        $this->belongsTo(Player::class, 'player_id', 'id');
    }
}
