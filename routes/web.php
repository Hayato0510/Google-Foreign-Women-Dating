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
Route::get('matching', function () {
    return view('google.check'); //仮LP
    // return view('google.noMatch'); //獲得LP(1)
    
    // return redirect('https://a-trade.jp/redirect/charin?media=G16531'); //チャリン - Aトレード
});

//APP遷移用
// APP(1)
Route::get('app1', 'AdController@app1');

// APP(2)
Route::get('app2', 'AdController@app2');

// APP(3)
Route::get('app3', 'AdController@app3');


// LP確認用
Route::get('cccheck', function () {
    return view('google.noMatch'); //獲得LP(1)
});
