<?php

use App\Http\Controllers\Dashboard\AchievementController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\AdminstrativeController;
use App\Http\Controllers\Dashboard\CoursesController;
use App\Http\Controllers\Dashboard\FinanciallyController;
use App\Http\Controllers\Dashboard\JobController;
use App\Http\Controllers\Dashboard\MeetingController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\PublicAssociationController;
use App\Http\Controllers\Dashboard\TeamController;
use App\Http\Controllers\Dashboard\PlanController;
use App\Http\Controllers\Dashboard\PolicyController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\TargetController;
use App\Http\Controllers\FrontController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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


 Route::get('/',[FrontController::class,'index'])->name('home');
 Route::get('/jobs',[FrontController::class,'jobs'])->name('jobs');
 Route::get('/manager',[FrontController::class,'manager'])->name('manager');
 Route::get('/team-Details',[FrontController::class,'teamDetails'])->name('teamDetails');
 Route::get('/courses',[FrontController::class,'courses'])->name('courses');
 Route::get('/coursesDetails/{id}',[FrontController::class,'coursesDetails'])->name('coursesDetails');
 Route::get('/adminstrative',[FrontController::class,'adminstrative'])->name('adminstrative');
 
 Route::get('/public-associations',[FrontController::class,'publicAssociations'])->name('publicAssociations');

Route::prefix('dashboard')->middleware('guest:admin')->group(function () {

    Route::get('login',[AuthController::class, 'showLogin'])->name('auth.login-show');
    Route::post('login',[AuthController::class, 'login'])->name('auth.login');
});
Route::prefix('dashboard')->middleware('auth:admin') ->group(function () {


    Route::get('/', function () {  return view('dashboard.home');  })->name('dashboard.home');


    Route::resource('publicAssociations',  PublicAssociationController::class);
    Route::resource('teams',  TeamController::class);
    Route::resource('meetings',  MeetingController::class);
    Route::resource('financiallies',  FinanciallyController::class);
    Route::resource('plans',  PlanController::class);
    Route::resource('achievements',  AchievementController::class);
    Route::resource('news',  NewsController::class);
    Route::resource('courses',  CoursesController::class);
    Route::resource('jobs',  JobController::class);
    Route::resource('policies',  PolicyController::class);
    Route::resource('sliders',  SliderController::class);
    Route::resource('adminstratives',  AdminstrativeController::class);
    Route::resource('targets',  TargetController::class);


    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

