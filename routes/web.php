<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\User;
use Illuminate\Http\RedirectResponse;

	Route::get('/', 'HomeController@index');
	
	Route::get('/home', 'HomeController@index');
	
	Route::get('job', 'JobController@index');
	Route::get('job/apply/{id}', 'JobController@apply');
	Route::get('job/company/{id}', ['as' => 'id', 'uses' => 'JobController@company']);
	Route::get('job/search', ['as' => 'term', 'uses' => 'JobController@search']);
	
	Route::get('perusahaan', 'CompanyController@index');
	
	Route::get('location/data/{type}/{id}', 'ProfileController@getData');
	
	Route::get('add/position/{position}', 'PositionController@create');
	
	Route::get('profil', 'ProfileController@index');
	Route::get('age', 'ProfileController@cobaAge');
	Route::post('profil', 'ProfileController@store');
	
	Route::get('dashboard', 'DashboardController@index');
	
	Auth::routes();
	
	Route::get('contact', function()
	{
		return view('contact');
	});
	
	// route untuk perusahaan
	Route::get('company-register', 'CompanyController@register');
	Route::post('company-register', 'CompanyController@store');

	Route::get('company-job', 'JobController@jobByCompany');
	Route::post('company-profile', 'CompanyController@update');
	Route::get('company-applicant', 'ApplicantController@applicantByCompany');
	
	Route::get('job/create', 'JobController@create');
	Route::post('job/create', 'JobController@store');
