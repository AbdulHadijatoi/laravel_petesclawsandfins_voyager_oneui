<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Candidate\CandidateController;
use App\Http\Controllers\Investor\InvestorController;
use App\Http\Controllers\Partner\PartnerController;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->role_id == 1){
            $home = '/dashboard';
        }else if(Auth::user()->role_id == 3){
            $home = 'investor/welcome';
        }else if(Auth::user()->role_id == 4){
            $home = 'partner/welcome';
        }else{
            $home = 'candidate/welcome';
        }
        return redirect()->intended($home);
    }
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/policy', function () {
    return view('policy');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['middleware'=> 'auth'], function(){
	Route::group(['middleware' => 'role:admin','prefix' => 'admin', 'as' => 'admin.'], function(){
        Route::resource('dashboard', AdminController::class);
	});
	Route::group(['middleware' => 'role:candidate','prefix' => 'candidate', 'as' => 'candidate.'], function(){
        Route::resource('welcome', CandidateController::class);
	});
	Route::group(['middleware' => 'role:investor','prefix' => 'investor', 'as' => 'investor.'], function(){
        Route::resource('welcome', InvestorController::class);
	});
    Route::group(['middleware' => 'role:partner','prefix' => 'partner', 'as' => 'partner.'], function(){
        Route::resource('welcome', PartnerController::class);
	});
});

