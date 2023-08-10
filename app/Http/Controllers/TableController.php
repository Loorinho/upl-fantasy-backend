<?php

namespace App\Http\Controllers;

use App\Models\Table;

class TableController extends Controller
{
    public function getTable()
    {
        // $table = Table::all()->load("teams");
        $table = Table::all();

        return response()->json([
            'table' => $table
        ]);
    }
}
