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


Route::group(['namespace' => 'admin','prefix' => 'admin'], function (){

    $this->resource('/articles','ArticleController');
    $this->resource('/news','NewsController');
    $this->get('/panel','PanelController@index');
    $this->post('/panel/upload-image','PanelController@UploadImageSubject');
 }
);