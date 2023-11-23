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
    return view('home');
});


Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashboard",
        "username" => "Admin",
        "roles" => "Admin",
        "image" => "pakdekan.png",
        "nama_lengkap" => "Dr. Helmy Widyantara"
    ]);
});

Route::get('/table', function(){
    return view('table',[
        "title" => "Tabel",
        "username" => "Admin",
        "roles" => "Admin",
        "image" => "pakdekan.png",
        "nama_lengkap" => "Dr. Helmy Widyantara"
    ]);
});

Route::get('/chart', function(){
    return view('chart',[
        "title" => "Chart",
        "username" => "Admin",
        "roles" => "Admin",
        "image" => "pakdekan.png",
        "nama_lengkap" => "Dr. Helmy Widyantara"
    ]);
});

Route::get('/peta', function(){
    return view('peta',[
        "title" => "Denah Sensor",
        "username" => "Admin",
        "roles" => "Admin",
        "image" => "pakdekan.png",
        "nama_lengkap" => "Dr. Helmy Widyantara"
    ]);
});

Route::get('/tambah_sensor', function(){
    return view('tambah_sensor',[
        "title" => "Tambah Sensor",
        "username" => "Admin",
        "roles" => "Admin",
        "image" => "pakdekan.png",
        "nama_lengkap" => "Dr. Helmy Widyantara"
    ]);
});
