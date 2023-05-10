<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UsersController;


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
    Route::get('admin/contact/mensage/{id}',[ContactsController::class, 'show'])->name('admin.contact.mensage');
    Route::get('admin/contact/destroy/{id}',[ContactsController::class, 'destroy'])->name('admin.contact.destroy');

    //Rutas para usuarios
    Route::get('admin/usuarios',[UsersController::class, 'index'])->name('admin.usuarios');
    Route::get('admin/usuarios/myprofile',[UsersController::class, 'myProfile'])->name('usuarios.myprofile');
    Route::post('usuarios/myprofile/update',[UsersController::class, 'myProfileUpdate'])->name('usuarios.myprofile.update');
});

//Rutas para contacto
Route::get('contact/store',[ContactsController::class, 'store'])->name('contact.store');

require __DIR__.'/auth.php';
