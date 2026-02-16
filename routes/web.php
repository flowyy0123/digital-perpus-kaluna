<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/loginuser', function () {
    return view('loginuser');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/userregister', function () {
    return view('userregister');
});

Route::get('/adminregister', function () {
    return view('adminregister');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/buku', function () {
    return view('buku');
});

Route::get('/anggota', function () {
    return view('anggota');
});
