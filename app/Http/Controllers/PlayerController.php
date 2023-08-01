<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function createPlayer(Request $request)
    {
        $player = Player::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'shirt_number' => $request->shirtNumber,
            'position' => $request->position,
            'foot' => $request->foot,
            'team_id'=>$request->teamId,
            'age' => $request->age,
        ]);

        return response()->json([
            'message' => $player->first_name . ' ' . $player->last_name . ' created successfully'
        ], 200);
    }


    public function listPlayers()
    {
        $players = Player::all()->load('team');
        return response()->json([
            'players' => $players
        ], 200);
    }

    public function showPlayer($id)
    {
        $player = Player::find($id)->first()->load('team');

        return response()->json([
            'player' => $player
        ], 200);
    }
}
