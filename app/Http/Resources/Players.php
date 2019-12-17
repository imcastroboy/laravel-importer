<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Players extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function($player){
                return $this->getInfo($player);
            })
        ];
    }

    public function getInfo($player)
    {
        return [
            'id' => $player->id,
            'fullname' => $player->fullname
        ];
    }
}
