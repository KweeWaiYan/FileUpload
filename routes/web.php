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

Route::get('/upload', 'UploadController@uploadForm');

Route::get('/video_upload', 'VideoUploadController@uploadForm');

Route::get('/pdf_upload', 'PdfUploadController@uploadForm');

Route::post('/pdf', 'PdfUploadController@uploadSubmit');

Route::post('/photo', 'UploadController@uploadSubmit');

Route::post('/video', 'VideoUploadController@uploadSubmit');


