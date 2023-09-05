<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/register', function() {
    return view('register');
});

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::middleware(['isLogin'])->group(function () {
    
    Route::get('/adminindex', [UserController::class, 'adminindex'])->name('adminindex');


    Route::get('/useradmin', [UserController::class, 'index'])->name('useradmin');
    Route::get('/showadd', [UserController::class, 'showadd'])->name('showadd');
    Route::post('/adduser', [UserController::class, 'adduser'])->name('adduser');
    Route::get('/showupdate/{id}', [UserController::class, 'showupdate'])->name('showupdate');
    Route::post('/updateuser', [UserController::class, 'updateuser'])->name('updateuser');
    Route::get('/deleteuser/{id}', [UserController::class, 'deleteuser'])->name('deleteuser');

    Route::get('/nasabah', [NasabahController::class,'index'])->name('nasabah');
    Route::get('/showaddnasabah', [NasabahController::class,'create'])->name('showaddnasabah');
    Route::post('/storenasabah', [NasabahController::class,'store'])->name('storenasabah');
    Route::get('/showeditnasabah/{id}', [NasabahController::class,'edit'])->name('showeditnasabah');
    Route::post('/updatenasabah', [NasabahController::class,'update'])->name('updatenasabah');
    Route::get('/deletenasabah/{id}', [NasabahController::class,'destroy'])->name('deletenasabah');
    
    
    
    
    Route::get('/userindex', [UserController::class, 'userindex'])->name('userindex');
    
    
    
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
