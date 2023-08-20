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
        $players = Player::all();
        
        return response()->json([
            'message' => $player->first_name . ' ' . $player->last_name . ' created successfully',
            'players' => $players
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

      public function updatePlayer(Request $request, $id)
    {
        $player = Player::where('id', '=', $id)
            update([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'shirt_number' => $request->shirtNumber,
            'position' => $request->position,
            'foot' => $request->foot,
            'team_id'=>$request->teamId,
            'age' => $request->age,
        ]);
        if(!player){
               return response()->json([
                'message' => "Player could not be updated"
            ], 400);
        }
        $players = Player::all();
        
        return response()->json([
            'message' => $player->first_name . ' ' . $player->last_name . ' updated successfully',
            'players' => $players
        ], 200);
    }

}
