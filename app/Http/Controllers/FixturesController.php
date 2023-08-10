<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fixtures;

class FixturesController extends Controller
{
    public function getFixtures()
    {
        $fixtures = Fixtures::all();

        return response()->json([
           'fixtures' => $fixtures                     
        ]);
    }
}
