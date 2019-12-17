<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;

class Player extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "first_name" => $this->first_name,
            "second_name" => $this->second_name,
            "form" => $this->stats->form,
            "total_points" => $this->stats->total_points,
            "influence" => $this->stats->influence,
            "creativity" => $this->stats->creativity,
            "threat" => $this->stats->threat,
            "ict_index" => $this->stats->ict_index,
        ];
    }
}
