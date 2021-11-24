<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentReportController;
use App\Http\Controllers\StudentUnController;
use App\Models\StudentReport;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/search', [HomeController::class, 'search']);

Route::get('/siswa', [HomeController::class, 'siswa']);

Route::get('/students/{student}', [HomeController::class, 'siswaDetail']);
Route::get('/reports/{report}', [HomeController::class, 'siswaRaport']);
Route::get('/uns/{un}', [HomeController::class, 'siswaUn']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

  //STUDENT
  Route::resource('/dashboard/students', StudentController::class);
  
  //RAPORT
  Route::get('/dashboard/reports/create/{student}', [StudentReportController::class, 'create']);
  Route::get('/dashboard/reports/{studentReport}', [StudentReportController::class, 'show']);
  Route::post('/dashboard/reports', [StudentReportController::class, 'storeOne']);
  Route::get('/dashboard/reports/{studentReport}/edit', [StudentReportController::class, 'edit']);
  Route::put('/dashboard/reports/{studentReport}', [StudentReportController::class, 'update']);
  Route::delete('/dashboard/reports/{studentReport}', [StudentReportController::class, 'destroy']);

  //UN
  Route::get('/dashboard/un/create/{student}', [StudentUnController::class, 'create']);
  Route::get('/dashboard/un/{studentUn}/edit', [StudentUnController::class, 'edit']);
  Route::post('/dashboard/un/', [StudentUnController::class, 'storeOne']);
  Route::put('/dashboard/un/{studentUn}', [StudentUnController::class, 'update']);
  Route::delete('/dashboard/un/{studentUn}', [StudentUnController::class, 'destroy']);


  //IMPORT
  Route::get('/dashboard/import-raport', [StudentReportController::class, 'index'])->name('admin.import.raport');
  Route::post('/dashboard/import-raport', [StudentReportController::class, 'store']);

  Route::get('/dashboard/import-un', [StudentUnController::class, 'index'])->name('admin.import.un');
  Route::post('/dashboard/import-un', [StudentUnController::class, 'store']);
});