<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SettingController;
use App\Http\Controllers\MovieController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',function (){
    return view('app.base');
});
Route::resource('movie',MovieController::class);

Route::get('setting', [SettingController::class, 'index']) -> name('setting.index');
Route::put('setting', [SettingController::class, 'update']) -> name('setting.update');
Route::put('setting', [SettingController::class, 'saveSelection']) -> name('setting.saveSelection');

