<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userslist;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Forgetpassword;
use App\Http\Controllers\Createpost;
use App\Http\Controllers\Approve;
use App\Http\Controllers\Delete;
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
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/forget', function () {
    return view('forget');
});
Route::get('/dashboard', function () {
    return view('userlist');
});
Route::get('/table', function () {
    return view('userblog');
});
Route::get('/logout', function () {
    return view('login');
});
Route::get('/createpost', function () {
    return view('createpost');
});
Route::get('/userpost', function () {
    return view('userpost');
});
Route::get('/readmore/{id}', function ($id) {
    return view('readmore', ['id' => $id]);
});
Route::get('/adduser', function () {
    return view('admin');
});
Route::get('/getdes/{col}', function ($col) {
    return view('getdes', ['col' => $col]);
});
Route::get('/getdetails/{cols}', function ($cols) {
    return view('details', ['cols' => $cols]);
});
Route::get('/archeive', function () {
    return view('archeive');
});
Route::post('/register', [Userslist::class, 'register']);
Route::post('/login', [Logincontroller::class, 'Login']);
Route::post('/forget', [Forgetpassword::class, 'Forgetpassword']);
Route::post('/createpost', [Createpost::class, 'createpost']);
Route::get('/approve/{id}', [Approve::class, 'updates']);
Route::get('/deapprove/{id}', [Approve::class, 'deupdate']);
Route::get('/delete/{id}', [Delete::class, 'deletes']);
Route::get('/restore/{id}', [Delete::class, 'restore']);
Route::get('/permanentdelete/{id}', [Delete::class, 'permanent']);
Route::get('/mail', function () {
    return view('register');
});
