<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
    return view('welcome');
});


Auth::routes();


Route::middleware(['auth', 'user-access:mahasiswa'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});


Route::middleware(['auth', 'user-access:dosen'])->group(function(){
    Route::get('/dosen/home', [HomeController::class, 'dosenHome'])->name('dosenHome');
});


Route::middleware(['auth', 'user-access:superadmin'])->group(function(){
    Route::get('/superadmin/home', [HomeController::class, 'superAdminHome'])->name('superAdminHome');
});


Route::middleware(['auth', 'user-access:admin'])->group(function(){
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('adminHome');
});


Route::middleware(['auth', 'user-access:tendik'])->group(function(){
    Route::get('/tendik/home', [HomeController::class, 'tendikHome'])->name('tendikHome');
});


Route::middleware(['auth', 'user-access:akademik'])->group(function(){
    Route::get('/akademik/home', [HomeController::class, 'akademikHome'])->name('akademikHome');
});


Route::middleware(['auth', 'user-access:keuangan'])->group(function(){
    Route::get('/keuangan/home', [HomeController::class, 'keuanganHome'])->name('keuanganHome');
});


Route::middleware(['auth', 'user-access:direktur'])->group(function(){
    Route::get('/direktur/home', [HomeController::class, 'direkturHome'])->name('direkturHome');
});


Route::middleware(['auth', 'user-access:wakil1'])->group(function(){
    Route::get('/wakil1/home', [HomeController::class, 'wakil1Home'])->name('wakil1Home');
});
Route::middleware(['auth', 'user-access:wakil2'])->group(function(){
    Route::get('/wakil2/home', [HomeController::class, 'wakil2Home'])->name('wakil2Home');
});
Route::middleware(['auth', 'user-access:wakil3'])->group(function(){
    Route::get('/wakil3/home', [HomeController::class, 'wakil3Home'])->name('wakil3Home');
});


Route::middleware(['auth', 'user-access:lppm'])->group(function(){
    Route::get('/lppm/home', [HomeController::class, 'lppmHome'])->name('lppmHome');
});


Route::middleware(['auth', 'user-access:sdm'])->group(function(){
    Route::get('/sdm/home', [HomeController::class, 'sdmHome'])->name('sdmHome');
});
