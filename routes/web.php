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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/analytics', 'PagesController@analytics')->middleware('auth');

Route::get('/profile', 'UserController@edit');

Route::patch('/profile/{user}', 'UserController@update')->name('updateuser');

Route::get('/vaccinations', 'VaccinationController@index')->name('vaccinations')->middleware('auth');

Route::get('/vaccinations/edit/vaccination{id}/child{child_id}/parent{parent_id}', 'VaccinationController@edit')->name('edit');

Route::get('/vaccinations/view/vaccination{id}/child{child_id}/parent{parent_id}', 'VaccinationController@view')->name('view');

Route::get('/vaccinations/delete/{id}', 'VaccinationController@delete')->name('delete');
Route::get('/vaccinations/delete/{id}', 'ParentController@delete')->name('delete');
Route::get('/vaccinations/delete/{id}', 'ChildController@delete')->name('delete');

Route::post('/vaccinations/update/{id}', 'VaccinationController@update')->name('update');

Route::get('/vaccinations/create', 'ParentController@create')->name('parent');

Route::post('/vaccinations/create', 'ParentController@store');

Route::post('/vaccinationscreate', 'ChildController@store');

Route::post('/vaccinations', 'VaccinationController@store');

Route::post('/schedule', 'VaccinationsController@view')->name('fetch');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sendemail', 'sendEmailController@index')->name('email');

Route::post('/sendemail/send', 'sendEmailController@send');

Route::get('/sendsms', 'SendSMSController@index')->name('sms');

Route::post('/sendsms/send', 'SendSMSController@send');