<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\FixturesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/users', [AuthenticationController::class, 'getUsers']);


Route::post('/teams', [TeamController::class, 'createTeam']);
Route::get('/teams', [TeamController::class, 'getTeams']);
Route::get('/teams/{id}', [TeamController::class, 'getTeam']);


Route::post('/players', [PlayerController::class, 'createPlayer']);
Route::get('/players', [PlayerController::class, 'listPlayers']);
Route::get('/players/{id}', [PlayerController::class, 'showPlayer']);

Route::post('/managers', [ManagerController::class, 'createManager']);
Route::get('/managers', [ManagerController::class, 'listManagers']);
Route::get('/managers/{id}', [ManagerController::class, 'showManager']);

Route::get('/table', [TableController::class, 'getTable']);

Route::get('/fixtures', [FixturesController::class, 'getFixtures']);
Route::post('/fixtures', [FixturesController::class, 'vreateFixture']);

