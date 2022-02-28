<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    if(!Auth::user()){
        return view('welcome');
    }
    else{
        if(Auth::user()->role->role == 'candidate'){
            $home = 'candidate/welcome';
        }else if(Auth::user()->role->role == 'investor'){
            $home = 'investor/welcome';
        }else if(Auth::user()->role->role == 'partner'){
            $home = 'partner/welcome';
        }else{
            $home = 'candidate/welcome';
        }
        return redirect()->intended($home);
    }
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/terms', function () {
    return view('terms');
});
Route::get('/pages/slick', function () {
    return view('pages/slick');
});
Route::get('/policy', function () {
    return view('policy');
});
Route::get('/unknown/second_level', function () {
    return view('unknown/second_level');
});
Route::get('/pages/p1_t1', function () {
    return view('pages/p1_t1');
});
Route::get('/pages/p2_t1', function () {
    return view('pages/p2_t1');
});
Route::get('/pages/p3_t1', function () {
    return view('pages/p3_t1');
});
Route::get('/pages/p4_t1', function () {
    return view('pages/p4_t1');
});
Route::get('/pages/p5_t1', function () {
    return view('pages/p5_t1');
});
Route::get('/pages/p6_t1', function () {
    return view('pages/p6_t1');
});
Route::get('/pages/s1_p1_t1', function () {
    return view('pages/s1_p1_t1');
});
Route::get('/pages/second_level', function () {
    return view('pages/second_level');
});
