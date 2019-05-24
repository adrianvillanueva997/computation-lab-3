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

Route::get('/', static function () {
    return view('welcome');
});
Route::get('/propuestas','ProposalControler@proposals')->name('propuestas');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/propuesta/{id}', 'ProposalControler@propuestaprueba');

Route::group(['middleware' => 'admin', 'namespace' => 'Admin'], static function () {
    Route::get('/admin_home', 'AdminPanelController@index');
    Route::get('/panel_usuarios', 'AdminPanelController@user_panel');
    Route::get('/editar_usuario', 'AdminPanelController@user_panel');
});

Route::group(['middleware' => 'user', 'namespace' => 'User'], static function () {
    Route::get('/user_home', 'UserPanelController@index');
    Route::get('/crear_propuesta', 'UserPanelController@crear_propuesta');
    Route::post('/subir_propuesta', 'PropuestaControlador@insert');
    Route::get('/verpropuesta', 'UserPanelController@ver_propuesta');
    Route::get('/mensaje', 'UserPanelController@mensaje');
    Route::get('/formulariomodificacion_propuesta/{id}','UserPanelController@modificar_propuesta');
    Route::post('/updatepropuesta/{id}','PropuestaControlador@update_propuesta');
    Route::get('/deletepropuesta/{id}','PropuestaControlador@delete_propuesta');
});


