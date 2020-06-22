<?php

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

// LP獲得用
Route::get('dating', function () {
    // return view('google.check'); //仮LP
    return redirect('https://www.gamefeat.net/webapi/v1/reportClick?ad_id=8218&site_id=27669'); //イククル - GameFeat
});

// LP確認用
Route::get('cccheck', function () {
    return view('google.check'); //仮LP
});
