<?php

use App\Company;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('Home');

//Company Route
Route::get('/company', 'CompanyController@index')->name('Company');

Route::get('/company/create', 'CompanyController@create')->name('Company.create');
Route::post('/company', 'CompanyController@store')->name('Company.store');

Route::get('/company/{cid}/edit', 'CompanyController@edit')->name('Company.edit');
Route::put('/company/{cid}', 'CompanyController@update')->name('Company.update');

Route::delete('/company/{cid}', 'CompanyController@destroy')->name('Company.destroy');

//Empolye Route
Route::resource('/empolyee','EmpolyeeController');


