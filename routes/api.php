<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LawController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\DocumentController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
Route::get('/estados', [StateController::Class, 'index']);
Route::get('/cidades', [CityController::Class, 'index']);
Route::get('/leis', [LawController::Class, 'index']);
Route::post('/leis', [LawController::Class, 'create']);
Route::post('/pessoas', [PeopleController::Class, 'create']);
Route::get('/pessoas/{cpf}', [PeopleController::Class,'show']);
Route::put('/pessoas/{cpf}', [PeopleController::Class, 'update']);
Route::post('/documentos', [DocumentsControles::Class, 'create']);


});
