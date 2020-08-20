<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/new',function(){
    return view('new');
})->name('new-page');

Route::post('/new/submit/test',function(){
    dd(Request::all());
})->name('contact-form');