<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;


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
})->name('inicio');

/*Route::get('/dashboard', function () {
    return view('admin.home');
})->middleware(['auth'])->name('dashboard');*/

//Protección de rutas
Route::group(['middleware' => 'auth'],function()
{
    //Rutas del panel de administración
    Route::get('/dashboard', function () {
        return view('admin.home');
    })->name('dashboard');
    Route::get('admin/contact',[ContactsController::class, 'index'])->name('admin.contact');
});

//Rutas para contacto
Route::get('contact/store',[ContactsController::class, 'store'])->name('contact.store');

require __DIR__.'/auth.php';
