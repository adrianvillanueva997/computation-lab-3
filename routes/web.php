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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/admin_home', 'AdminPanelController@index');
});

Route::group(['middleware' => 'user', 'namespace' => 'User'], function(){
    Route::get('/user_home', 'UserPanelController@index');
    Route::get('/crear_propuesta', 'UserPanelController@crear_propuesta');
    Route::post('/subir_propuesta', 'PropuestaControlador@insert');
    Route::get('/verpropuesta', 'UserPanelController@ver_propuesta');
    Route::get('/mensaje', 'UserPanelController@mensaje');
});

