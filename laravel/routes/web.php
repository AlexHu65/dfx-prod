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


use Maatwebsite\Excel\Facades\Excel;

use App\Exports\CitasExport;
use App\Exports\MensajesExport;

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/thanks', 'HomeController@sendComentario')->name('comentario');
Route::post('/contacto', 'HomeController@sendCita')->name('cita');

// marketing digital
Route::get('brandwatch', 'HomeController@brandwatch')->name('brandwatch');
Route::get('marketing-digital' , 'HomeController@digital')->name('digital');
Route::get('digital-signage' , 'HomeController@digitalSignage')->name('signage');
Route::get('laboratorio-creativo' , 'HomeController@laboratorio')->name('laboratorio');
Route::get('blog' , 'HomeController@blog')->name('blog');
Route::get('blog/categoria/{categoria}' , 'HomeController@blogCategoria')->name('blog.categoria');
Route::get('blog/tags/{tags}' , 'HomeController@blogTags')->name('blog.tags');
Route::get('blog/{slug}' , 'HomeController@blogInterior')->name('blog.interior');
// contacto
Route::get('/contacto', 'HomeController@contacto')->name('contacto');
Route::get('/eventos', 'HomeController@eventos')->name('eventos');
Route::get('/contacto/thankyou', 'HomeController@thankyou')->name('gracias');

// recursos
Route::get('/recursos/{slug}', 'HomeController@recursos')->name('recursos.get');

Route::group(['prefix' => 'admTemplate'], function () {
  Voyager::routes();
});


Route::get('/view-clear', function() {
    $exitCode = Artisan::call('vendor:publish');
    return '<h1>View cache cleared</h1>';
});


Route::get('/download/App/Models/{model}',function($model){
  switch ($model){
    case 'Cita':
    return Excel::download(new CitasExport, 'citas.xlsx');
    break;

    case 'Mensaje':
    return Excel::download(new MensajesExport, 'mensajes.xlsx');
    break;
  }
});
