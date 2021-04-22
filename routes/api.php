<?php

use App\Http\Controllers\SolicitacaoController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/todassolicitacoes',[SolicitacaoController::class,'index'])->middleware('auth');
Route::put('alterarstatus/{id}',[SolicitacaoController::class,'update'])->middleware('auth');
Route::post('/solicitar',[SolicitacaoController::class,'store']);
Route::get('acompanhar/{codigo}',[SolicitacaoController::class,'show']);
Route::delete('cancelar/{codigo}',[SolicitacaoController::class,'destroy']);
