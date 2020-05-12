<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');;

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('user.logout');

Route::get('/form/new', 'HomeController@index')->name('forms.new');
Route::get('/form/getall', 'FormController@GetAll')->name('form.getall');
Route::get('/form/view_responses/{id}', 'FormController@view_responses')->name('form.view_responses');
Route::get('/form/get', 'FormController@Get')->name('form.get');
Route::get('/form/getresponses/{id}', 'FormController@GetResponse')->name('form.getresponse');

Route::post('/form/store', 'FormController@Store')->name('form.store');
Route::post('/form/data/store', 'FormController@StoreFormData')->name('form.data.store');
Route::get('/forms', 'FormController@index')->name('form.showall');
Route::get('/form/shared/{id}', 'FormController@Shared')->name('form.shared');
Route::get('/form/response/{id}', 'FormController@ViewResponseForm')->name('form.response.view');
  
       