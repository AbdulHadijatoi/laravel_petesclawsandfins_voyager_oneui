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

Route::get('/testURL', function () {
    return view('investor/welcome');
});
Route::get('/', function () {
    // return Auth::user()->role->name;
    if(!Auth::user()){
        return view('unknown/welcome');
    }
    else{
        if(Auth::user()->role->name == 'candidate'){
            return view('candidate/welcome');
        }else if(Auth::user()->role->name == 'investor'){
            return view('investor/welcome');
        }else if(Auth::user()->role->name == 'partner'){
            return view('partner/welcome');
        }else{
            return view('unknown/welcome');
        }
    }
});

Route::get('/second_level', function () {
    if(!Auth::user()){
        return view('unknown/second_level');
    }
    else{
        if(Auth::user()->role->name == 'candidate'){
            return view('candidate/second_level');
        }else if(Auth::user()->role->name == 'investor'){
            return view('investor/second_level');
        }else if(Auth::user()->role->name == 'partner'){
            return view('partner/second_level');
        }else{
            return view('unknown/second_level');
        }
    }
});

Route::get('/subpage', function () {
    // return Auth::user()->role->name;
    if(!Auth::user()){
        return view('unknown/subpage');
    }
    else{
        if(Auth::user()->role->name == 'candidate'){
            return view('candidate/subpage');
        }else if(Auth::user()->role->name == 'investor'){
            return view('investor/subpage');
        }else if(Auth::user()->role->name == 'partner'){
            return view('partner/subpage');
        }else{
            return view('unknown/subpage');
        }
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
