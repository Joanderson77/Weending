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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'web\HomeController@home');
Route::get('/event', 'web\EventController@event');
Route::get('/story', 'web\StoryController@story');
Route::get('/galery', 'web\GaleryController@galery');
Route::get('/contact', 'web\ContactController@contact');
Route::get('/mensagem', 'web\MensagemController@mensagem');
Route::get('/presents', 'web\PresentsController@presents');
Route::get('/gategories/{id}','web\PresentsController@gategories');
Route::get('/destroy/{id}','web\PresentsController@destroy');
Route::get('/concluir/{id}','web\PresentsController@concluir')->name('web.concluir');
Route::get('/categoria/{id}', 'web\PresentsController@categoria');


Route::get('/destroy/iten/{id}', 'PresentsController@destroy');




// Route::prefix('web')->name('web.')->group(function(){
//     Route::get('/destroy/{iten}', 'PresentsController@destroy')->name('destroy');
// });

// Route::get('/model', function(){
//     $itens = \App\Iten::all();
//     return $itens;
// });
