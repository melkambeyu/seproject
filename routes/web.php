<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function() {
    return view('welcome');
});

Route::group(['prefix' => 'applicant'], function () {
  Route::get('/login', 'ApplicantAuth\LoginController@showLoginForm');
  Route::post('/login', 'ApplicantAuth\LoginController@login');
  Route::post('/logout', 'ApplicantAuth\LoginController@logout');

  Route::get('/register', 'ApplicantAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'ApplicantAuth\RegisterController@register');

  Route::post('/password/email', 'ApplicantAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'ApplicantAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'ApplicantAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'ApplicantAuth\ResetPasswordController@showResetForm');
  
});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'company'], function () {
  Route::get('/login', 'CompanyAuth\LoginController@showLoginForm');
  Route::post('/login', 'CompanyAuth\LoginController@login');
  Route::post('/logout', 'CompanyAuth\LoginController@logout');

  Route::get('/register', 'CompanyAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'CompanyAuth\RegisterController@register');

  Route::post('/password/email', 'CompanyAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'CompanyAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'CompanyAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'CompanyAuth\ResetPasswordController@showResetForm');

  Route::post('/question/{id}', 'questionsController@store');
  Route::post('/exam/{id}', 'examsController@store');
  Route::get('/notify/{app_id}/{job_id}', 'companyController@notify');
  // Route::get('/exam/{id}', 'examsController@index');

});
Route::resource('questions', 'questionsController');
Route::resource('jobs','jobsController');
Route::resource('exams','examsController');
Route::resource('applicants','applicantController');
