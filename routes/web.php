<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
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
    $data = null;
    return view('welcome', compact('data'));
});

Route::post('/', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $data = Http::post('https://slab.srs-ssms.com/api/admin/loginuserlab', [
        'email' => $request->email,
        'password' => $request->password,
    ])->json();

    if ($data['success'] == 0) {
        return view('welcome')->withErrors(['msg' => Str::headline(strtolower($data['message']))]);
    }
    return view('welcome', compact('data'));
});
