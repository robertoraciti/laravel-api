<?php

use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TypologyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource("projects", ProjectController::class);
Route::get('/projects-by-typology/{typology_id}', [ProjectController::class, 'projectsByTypology']);

Route::apiResource("typologies", TypologyController::class)->only(["show"]);