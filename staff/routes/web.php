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

Route::get('/', function () {
    return view('welcome');
});

//route to staff mode
Route::get('/management', 'pagesController@staff');

//route to admin management page
Route::get('/admin_management', 'pagesController@admin_management');

//route to student info page
Route::get('/student_info', 'pagesController@student_info');

//route to subject suggestion page
Route::get('/suject_suggestion', 'pagesController@suject_suggestion');

//route to change language
Route::get('change/{locale}', function ($locale) {
	Session::put('locale', $locale);
	return Redirect::back();
});

Route::get('studentSearch' , 'StudentController@studentSearch');

Route::post('subjectSearch' , 'SubjectController@subjectSearch');

Route::resource('/student_info', 'StudentController');

Route::resource('/admin_management', 'StaffController');

Route::resource('/subject_suggestion', 'SubjectController');
