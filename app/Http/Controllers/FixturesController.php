<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fixtures;

class FixturesController extends Controller
{
    public function createFixture(Request $request)
    {
        $fixture = Fixtures::create([
            'season' =>  $request->season,
            'game_week' =>  $request->gameWeek,
            'home_team' => $request->homeTeam,
            'away_team' => $request->awayTeam,
            'stadium' => $request->stadium,
            'date' => $request->date,
            'time' => $request->time,
        ]);
        $fixtures = Fixtures::all();

        return response()->json([
            'message' => "The fixture of " . $fixture->home_team . " vs " . $fixture->away_team . " created successfully",
            'fixtures' => $fixtures
        ]);
    }
    public function getFixtures()
    {
        $fixtures = Fixtures::all();

        return response()->json([
            'fixtures' => $fixtures
        ]);
    }
}
