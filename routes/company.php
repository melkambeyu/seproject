<?php

Route::get('/home', 'companyController@index')->name('home');
Route::get('/jobs', 'companyController@jobs')->name('jobs');
Route::get('/delQue/{id}', 'questionsController@destroy');

