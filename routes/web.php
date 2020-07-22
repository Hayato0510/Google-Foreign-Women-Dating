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
Route::get('live', function () {
    return view('google.check'); //仮LP
    // return redirect('https://a-trade.jp/redirect/charin?media=G16531'); //チャリン - Aトレード
});

// LP確認用
Route::get('cccheck', function () {
    return view('google.noMatch'); //獲得LP(1)
});
