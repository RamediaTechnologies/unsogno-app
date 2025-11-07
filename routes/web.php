<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->with('message', 'Hello from Codespaces!');

});
