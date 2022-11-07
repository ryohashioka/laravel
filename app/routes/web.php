<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function (Request $request) {
    return view('greeting', ['name' => $request->query('name', 'James')]);
});

Route::get('/greeting/{name}', function ($name) {
    if($name==="aaa") {
        return view('greeting', [
            'name' => "ハリアー",
            'x' => "1560",
            'y' => "1700",
            'z' => "5000",
        ]);
    } else {
        return view('greeting', ['name' => "huga"]);
    }
});

Route::get('/car/{name}', [CarController::class, 'show']);


Route::get('/mypage/{id}', [UserController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/tesla', function() {
    return view('tesla');
});

require __DIR__.'/auth.php';
