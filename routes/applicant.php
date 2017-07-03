<?php
Route::get('/home', 'applicantController@index')->name('home');
Route::get('/apply/{id}', 'applicantController@apply');
Route::get('/exams', 'applicantController@examine');
Route::get('/applications', 'applicantController@applicate');
Route::get('/take/{id}', 'applicantController@test');
Route::post('/{exam_id}/mark', 'applicantController@mark');
// Route::get('/home', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('applicant')->user();

//     //dd($users);

//     return view('applicant.home');
// })->name('home');

