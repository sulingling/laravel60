<?php
Route::get('/', 'Web\AppController@getApp')->middleware('auth');
Route::get('/login', 'Web\AppController@getLogin')
    ->name('login')
    ->middleware('guest');
Route::get('/auth/{social}', 'Web\AuthenticationController@getSocialRedirect')
    ->middleware('guest');
Route::get('/auth/{social}/callback', 'Web\AuthenticationController@getSocialCallback')
    ->middleware('guest');