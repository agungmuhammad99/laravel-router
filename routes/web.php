<?php


Route::get('/', function () {
    return view('index');
});

Route::get('/gallery ', function () {
    return view('gallery');
});

