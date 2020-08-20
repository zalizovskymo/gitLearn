<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/new',function(){
    return view('new');
});