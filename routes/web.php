<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function (Request $request) {
    $guest = $request->to;

    $date = "16";
    $month = "09";
    $year = "2024";
    $hour = "07";
    $minute = "00";
    return view('home', compact('date', 'month', 'year', 'hour', 'minute', 'guest'));
});

Route::get('/invite', function () {
    return view('invite');
});
