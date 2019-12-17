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
        $player = $this->player->findById($id);

        if(!$player) {
            return response()->json([
                'error' => 'Not Found',
                'message' => 'Cannot find the specific player.',
                'code' => 404
            ], 404);

        }

        return new PlayerResource($player);
    }


}
