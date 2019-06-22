<?php

require 'admin.php';

Route::get('/', function () {
    return view('welcome');
});

Route::view('/admin', 'admin.dashboard.index');
Route::view('/admin/login', 'admin.auth.login');
