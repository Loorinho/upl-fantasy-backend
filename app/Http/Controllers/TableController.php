<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TableController extends Controller
{
    public function getTable()
    {
        $table = Table::all();
        return response()->json([
            'teams'=> $teams                    
        ]);
    }
}