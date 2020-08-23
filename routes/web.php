<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/new',function(){
    return view('new');
})->name('new-page');

Route::post('/new/submit/test','NewController@submit')->name('contact-form');

Route::get('/new/all','NewController@allMessages')->name('messages-all');
Route::get('/new/all/{id}','NewController@showOneMessage')->name('one-message-show');
Route::get('/new/all/update/{id}','NewController@updateMessage')->name('message-update');

Route::post('/new/all/update/{id}','NewController@updateMessageSubmit')->name('contact-update-submit');

Route::get('/new/all/delete/{id}','NewController@deleteMessage')->name('message-delete');