<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\chat\ContactController;
use App\Http\Controllers\chat\MessageController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\Dashboard\ParentController;
use App\Http\Controllers\ProSkillController;
use App\Http\Controllers\Work\EducationController;
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

// Logout
Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});



// CV
Route::get('/', function () {
    return redirect('/' . app()->getLocale());
});

Route::middleware('locale')->group(function () {
    Route::get('/{locale}', 'CvController@show')->name('cv.show');
});



// chat
Route::post('/chat', [MessageController::class, 'chatForm'])->name('chatForm');

// dashboard
Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/home', [ParentController::class, 'messageNav'])->name('home');
    Route::resource('/user', UserController::class);
    Route::resource('/professional', ProSkillController::class);
    Route::resource('/education', EducationController::class);
    // about
    Route::resource('/about', AboutController::class);

    // MESSAGE
    Route::get('Contact-box', [ContactController::class, 'contactBox'])->name('contactBox');
    Route::get('read-mess/{message}', [ContactController::class, 'readMess'])->name('readMess');
    Route::delete('content/delete', [ContactController::class, 'destroy'])->name('content.destroy');
    Route::delete('content/destroyAll', [ContactController::class, 'destroyAll'])->name('content.destroyAll');



});

// login
Route::middleware(['guest', 'throttle:authentication'])->group(function () {
    Route::view('/dashboard/login', 'auth.login')->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
});
