<?php

namespace App\Http\Controllers;

use App\Http\Resources\Player as PlayerResource;
use App\Http\Resources\Players as PlayersCollection;
use App\Repositories\PlayerRepository;
use Illuminate\Http\Request;

class PlayersController extends Controller
{

    public $player;

    public function __construct(PlayerRepository $player)
    {
        $this->player = $player;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return new PlayersCollection($this->player->getData());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new PlayerResource($this->player->findById($id));
    }


}
