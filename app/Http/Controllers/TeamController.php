<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function createTeam(Request $request)
    {
       $team = Team::create([
            'name'=>$request->name,
            'city'=>$request->city
       ]);

        return response()->json([
            'team'=>$team,
            'message'=> $team->name .' created successfully!'
        ]);
    }

    public function getTeams()
    {
        $teams = Team::all()->load(['players', 'manager']);

        return response()->json([
            'teams' => $teams,
        ]);
    }
}
