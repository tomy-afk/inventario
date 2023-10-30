<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LechugaController;
use Illuminate\Support\Facades\Auth;

Route::prefix('lechuga')
    ->name('lechuga.')
    ->controller(LechugaController::class)
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create'); // Ruta para mostrar la vista create
        Route::post('save', 'store')->name('save');
        Route::get('{lechuga}', 'show')->name('show');
        Route::get('{lechuga}/edit', 'edit')->name('edit');
        Route::put('{lechuga}', 'update')->name('update');
        Route::delete('{lechuga}', 'destroy')->name('destroy');
    });

// Ruta para la vista de inicio de sesión
Route::get('/', function () {
    return view('auth.login');
});

Route::post('save-lechuga', [LechugaController::class, 'store'])->name('save-lechuga');
Route::get('admin/lechuga-table', 'App\Http\Controllers\LechugaController@dataTable')->name('admin.lechuga.table');
// Route::get('/generate-pdf', 'LechugaController@generatePDF')->name('lechuga.pdf');
// Route::get('/generate-pdf', [LechugaController::class, 'generatePDF'])->name('lechuga.pdf');
// Route::get('/generate-pdf/{id}', 'LechugaController@generatePDF')->name('lechuga.pdf');
// Route::get('/generate-pdf/{id}', [LechugaController::class, 'generatePDF'])->name('lechuga.pdf');
Route::get('/lechuga/generate-pdf/{id}', [LechugaController::class, 'generatePDF'])->name('lechuga.pdf');

// Otras rutas...

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
