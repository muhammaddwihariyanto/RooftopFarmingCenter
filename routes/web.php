<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController;
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
    return view('home');
});
// Route::get('/', 'HomeController@index')->name('home1');
// //Route::get('home', 'HomeController@index')->name('home');

Route::get('home', ([HomeController::class, 'index']))->name('home');


Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashboard",
        "username" => "HWD",
        "roles" => "Admin",
        "image" => "pakdekan.png",
        "nama_lengkap" => "Dr. Helmy Widyantara"
    ]);
});

Route::get('/table', function(){
    return view('table',[
        "title" => "Tabel",
        "username" => "HWD",
        "roles" => "Admin",
        "image" => "pakdekan.png",
        "nama_lengkap" => "Dr. Helmy Widyantara"
    ]);
});

Route::get('/chart', function(){
    return view('chart',[
        "title" => "Chart",
        "username" => "HWD",
        "roles" => "Admin",
        "image" => "pakdekan.png",
        "nama_lengkap" => "Dr. Helmy Widyantara"
    ]);
});

Route::get('/peta', function(){
    return view('peta',[
        "title" => "Denah",
        "username" => "HWD",
        "roles" => "Admin",
        "image" => "pakdekan.png",
        "nama_lengkap" => "Dr. Helmy Widyantara"
    ]);
});
