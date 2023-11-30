<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/danh-gia-drl', function(){
    return view('danh-gia-drl');
});


Route::get('/thong-tin-ca-nhan', function (){
    return view('thong-tin-ca-nhan');
});
Route::get('/instructorDetail', function (){
    return view('user3/instructorDetail');
});
Route::get('/stdList', function (){
    return view('user3/stdList');
});
Route::get('/evaluate', function (){
    return view('user2/evaluate');
});
