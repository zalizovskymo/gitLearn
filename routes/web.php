<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/new',function(){
    return view('new');
})->name('new-page');

Route::post('/new/submit/test','NewController@submit')->name('contact-form');