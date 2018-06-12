<?php
use App\Student;
use App\Fees;
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

Route::get('/RegisterStudent','StudentController@viewform');
Route::post('/RegisterStudent','StudentController@register');
Route::get('/AddFees','FeesController@viewform');
Route::post('/AddFees','FeesController@register');
Route::post('/SearchStudentFees','FeesController@search');
Route::get('/','FeesController@homepage');
