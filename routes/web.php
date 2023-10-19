<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController;
use Http;
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
    $pH_client = Http::withHeaders([
        'X-M2M-Origin' => 'dfadb386eb62b10a:99882941cb61d872',
        'Content-Type' => 'application/json;ty=4',
        'Accept' => 'application/json'
    ])
        ->get('https://platform.antares.id:8443/~/antares-cse/antares-id/RooftopITTS2/pH2/la');
    $pH = json_decode($pH_client->body(), true);
    //dd($pH['m2m:cin']['con']);
    foreach ($pH as $key ) {
       // echo (int)($key["con"]);
        //dd((float)$key["con"]);
    }
    $ec_client = Http::withHeaders([
        'X-M2M-Origin' => 'dfadb386eb62b10a:99882941cb61d872',
        'Content-Type' => 'application/json;ty=4',
        'Accept' => 'application/json'
    ])
        ->get('https://platform.antares.id:8443/~/antares-cse/antares-id/RooftopITTS2/Conductivity2/la');
    $ec = json_decode($ec_client->body(), true);
    foreach ($ec as $key ) {

    }
    $sm_client = Http::withHeaders([
        'X-M2M-Origin' => 'dfadb386eb62b10a:99882941cb61d872',
        'Content-Type' => 'application/json;ty=4',
        'Accept' => 'application/json'
    ])
        ->get('https://platform.antares.id:8443/~/antares-cse/antares-id/RooftopITTS2/Moisture2/la');
    $sm = json_decode($sm_client->body(), true);
    $st_client = Http::withHeaders([
        'X-M2M-Origin' => 'dfadb386eb62b10a:99882941cb61d872',
        'Content-Type' => 'application/json;ty=4',
        'Accept' => 'application/json'
    ])
        ->get('https://platform.antares.id:8443/~/antares-cse/antares-id/RooftopITTS2/Temperature2/la');
    $st = json_decode($st_client->body(), true);
    $nitro_client = Http::withHeaders([
        'X-M2M-Origin' => 'dfadb386eb62b10a:99882941cb61d872',
        'Content-Type' => 'application/json;ty=4',
        'Accept' => 'application/json'
    ])
        ->get('https://platform.antares.id:8443/~/antares-cse/antares-id/RooftopITTS2/Nitrogen2/la');
    $nit = json_decode($nitro_client->body(), true);

    $potassium_client = Http::withHeaders([
        'X-M2M-Origin' => 'dfadb386eb62b10a:99882941cb61d872',
        'Content-Type' => 'application/json;ty=4',
        'Accept' => 'application/json'
    ])
        ->get('https://platform.antares.id:8443/~/antares-cse/antares-id/RooftopITTS2/Potassium2/la');
    $kalium = json_decode($potassium_client->body(), true);

    $phos_client = Http::withHeaders([
        'X-M2M-Origin' => 'dfadb386eb62b10a:99882941cb61d872',
        'Content-Type' => 'application/json;ty=4',
        'Accept' => 'application/json'
    ])
        ->get('https://platform.antares.id:8443/~/antares-cse/antares-id/RooftopITTS2/Phosporus2/la');
    $phosporus = json_decode($phos_client->body(), true);

    return view('dashboard', [
        "title" => "Dashboard",
        "username" => "HWD",
        "roles" => "Admin",
        "image" => "pakdekan.png",
        "nama_lengkap" => "Dr. Helmy Widyantara",
        "data_pH" => $pH,
        "data_ec" => $ec,
        "data_sm" => $sm,
        "data_st" => $st,
        "data_nit" => $nit,
        "data_kal" => $kalium,
        "data_phos" => $phosporus
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

Route::get('/rooftop', function () {
    // $client = Http::get('https://platform.antares.id:8443/~/antares-cse/antares-id/Duren/Soil_Moisture/la')->status();
    $client = Http::withHeaders([
        'X-M2M-Origin' => 'dd211a876a8f2d07:adbc47751f3dc110',
        'Content-Type' => 'application/json;ty=4',
        'Accept' => 'application/json'
    ])
        ->get('https://platform.antares.id:8443/~/antares-cse/antares-id/RooftopITTS/pH1/la');
    $client_decod = json_decode($client->body(), true);
    //dd($client_decod['m2m:cin']['con']);
    foreach ($client_decod as $key ) {
        echo $key["con"];
        dd($key["con"]);
    }

    return view('dedurian',[
        'client' => $client
    ]);
});
