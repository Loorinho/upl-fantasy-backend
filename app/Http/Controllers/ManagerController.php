<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
   public function createManager(Request $request)
   {
    $manager = Manager::create([
        'first_name'=>$request->firstName,
        'last_name' => $request->lastName,
        'team_id' => $request->teamId,
        'age' => $request->age,
    ]);
    $managers = Manager::all();
    return response()->json([
        'message' => $manager->first_name . ' '. $manager->last_name .' created successfully',
         'managers' => $managers                   
    ], 200);
   }

    public function listManagers()
    {
        $managers = Manager::all()->load('team');
        return response()->json([
            'managers' => $managers
        ], 200);
    }

    public function showManagers($id)
    {
        $manager = Manager::find($id)->first()->load('team');

        return response()->json([
            'manager' => $manager
        ], 200);
    }
}
