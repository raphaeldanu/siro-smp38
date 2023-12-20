<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentReportController;
use App\Http\Controllers\StudentUnController;

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

Route::controller(HomeController::class)->group(function () {
  Route::get('/', 'index')->name('home');

  Route::get('/search', 'search');
  
  Route::get('/students/{student}', 'siswaDetail');
  Route::get('/reports/{report}', 'siswaRaport');
  Route::get('/uns/{un}', 'siswaUn');
});

Route::controller(LoginController::class)->group(function () {
  Route::get('/login', 'index')->name('login');
  Route::post('/login', 'authenticate');
  Route::post('/logout', 'logout');
});

Route::middleware(['auth'])->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

  Route::prefix('dashboard')->group(function () {
    //STUDENT
    Route::resource('students', StudentController::class);
    
    //RAPORT
    Route::get('/reports/create/{student}', [StudentReportController::class, 'create']);
    Route::resource('reports', StudentReportController::class)->except(['create'])->parameters([
      'reports' => 'studentReport',
    ]);
  
    //UN
    Route::get('/un/create/{student}', [StudentUnController::class, 'create']);
    Route::get('/un/{studentUn}/edit', [StudentUnController::class, 'edit']);
    Route::post('/un', [StudentUnController::class, 'store']);
    Route::put('/un/{studentUn}', [StudentUnController::class, 'update']);
    Route::delete('/un/{studentUn}', [StudentUnController::class, 'destroy']);
  
    //IMPORT
    Route::get('/import-raport', [StudentReportController::class, 'index'])->name('admin.import.raport');
    Route::post('/import-raport', [StudentReportController::class, 'import']);
  
    Route::get('/import-un', [StudentUnController::class, 'index'])->name('admin.import.un');
    Route::post('/import-un', [StudentUnController::class, 'import']);
  });
});