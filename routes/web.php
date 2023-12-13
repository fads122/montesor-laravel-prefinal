<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\DeptController;
// use App\Http\Controllers\BlogController;
// use App\Http\Controllers\CalendarController;
// use App\Http\Controllers\CreateController;
// use App\Http\Controllers\EditController;
// use App\Http\Controllers\ProfileController;

// use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfessorController;


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
})->name('welcome');



Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/register', function () {
    return view('register');
})->name('register');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::get('/create', function () {
    return view('create');
})->name('create');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/edit', function () {
    return view('edit');
})->name('edit');




Route::get('/post/{id}', function($id)
{
  return "id number is : ". $id;
}
);

Route::resource('welcome', WelcomeController::class);
// Route::resource('/landing', LandingController::class);
// Route::resource('calendar', CalendarController::class);
// Route::resource('login', LoginController::class);
// Route::resource('register', RegisterController::class);
// Route::resource('profile', ProfileController::class);
// Route::resource('edit', EditController::class);
// Route::resource('form', FormController::class);
// Route::resource('user', UserController::class);
// Route::resource('student', StudentController::class);
Route::post('/register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login');



Route::resource('professors', ProfessorController::class);


Route::get('/welcome', [ProfessorController::class, 'welcome'])->name('welcome');


