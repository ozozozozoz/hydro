<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AskController;
use App\Http\Controllers\AboutViewController;

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
    return view('index');
});

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('about', [AboutViewController::class,'index']);
Route::get('/about', function () {
    return view('about');
});

Route::view('expertise', 'expertise');

Route::get('/testi', function () {
    return view('testi');
});

Route::get('/news', function () {
    return view('news');
});

Route::view('kontak', 'contact');

Route::post('testadd', [AskController::class, 'AddAsk']);

// Route::post('add', 'AskController@AddEnquiry');

Route::view('test', 'test');

Route::view('project1', 'ourproject1');

Route::view('adminlogin', 'admin.login');


