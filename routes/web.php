<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [FormController::class, 'index']);


Route::get('add-blog-post-form', [FormController::class, 'index']);
Route::post('store-form', [FormController::class, 'store']);
Route::post('store-form1', [FormController::class, 'store1']);

Route::get('ModificarHoras/{id}', [FormController::class, 'ModificarHoras']);
Route::get('ConsultaIndividual/{id}', [FormController::class, 'ConsultaIndividual']);
Route::get('ConsultaVarios/{id}', [FormController::class, 'ConsultaVarios']);
Route::get('/GraficoTorta/{id}', function (Request $request)
{   $porcentajev2 = $request->id;
    return view('cosas', compact('porcentajev2'));
});