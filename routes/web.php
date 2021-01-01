<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/', 'DasboardOrController@index')
//     ->name('AturanDaftar');

Route::prefix('admin')
    ->namespace('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DasboardController@index')
            ->name('dasboard');
        Route::get('/dataOr', 'pendaftaranOrController@index')
            ->name('dataOr');
        Route::resource('alumni', 'AlumniController');
    });

Route::prefix('/')
    ->namespace('pendaftaranOr')
    // ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DasboardOrController@pendaftaranTutup')
            ->name('AturanDaftar');

        Route::get('/anggotaOr/export_excel', 'pendaftaranOrController@export_excel')
            ->name('exprt_excel');

        Route::get('/pengumuman', 'pendaftaranOrController@pengumuman')
            ->name('pengumuman');

        Route::post('/anggotaOr/import_excel', 'pendaftaranOrController@import_excel')
            ->name('exprt_excel');

        Route::get('/pendaftaranOr/cari', 'pendaftaranOrController@cari')
            ->name('pencarian');

        Route::get('/daftar', 'DasboardOrController@daftar')
            ->name('daftar');

        Route::get('viewPdf/{id}', 'DasboardOrController@viewPdf')
            ->name('viewPdf');

        Route::get('/download', 'DasboardOrController@DownloadVideo')
            ->name('download');

        Route::resource('pendaftaranOr', 'pendaftaranOrController');
    });


Auth::routes([
    'register' => false,
]);
