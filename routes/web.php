<?php

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
    return view('welcome');
})->middleware('AlreadyLoginIn');

 Route::get("/register_agent", "App\Http\Controllers\HomeController@register_agent")->name("register_agent");
 Route::get("/register_company", "App\Http\Controllers\HomeController@register_company")->name("register_company");
 Route::get("/signin", "App\Http\Controllers\HomeController@signin")->name("signin");
 Route::get("/login", "App\Http\Controllers\HomeController@login")->name("login");
 Route::post('/send', "App\Http\Controllers\HomeController@send")->name("send");
 Route::get("/verify/{code}", "App\Http\Controllers\HomeController@verify");
 Route::post("/check", "App\Http\Controllers\HomeController@check");
 Route::post("/log", "App\Http\Controllers\HomeController@log");
 Route::get("/agent_dashboard/{user}", "App\Http\Controllers\HomeController@agent_dashboard")->name("agent_dashboard")->middleware('auth');
 Route::get("/company_dashboard/{user}", "App\Http\Controllers\HomeController@company_dashboard")->name("company_dashboard")->middleware('auth');
 Route::get('/logout','App\Http\Controllers\HomeController@Logout')->name('logout');
 Route::post("/info", "App\Http\Controllers\HomeController@info");
 Route::post("/payment", "App\Http\Controllers\HomeController@payment");
 Route::get("/money/{ref}", "App\Http\Controllers\HomeController@money");
 Route::get("/applicant", "App\Http\Controllers\HomeController@applicant")->name('applicant');
 Route::get("/lastofus", "App\Http\Controllers\HomeController@lastofus")->name('lastofus');
